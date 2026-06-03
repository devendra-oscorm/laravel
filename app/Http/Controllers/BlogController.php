<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // ── Admin: list all blogs ─────────────────────────────────────────────────
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    // ── Admin: show create form ───────────────────────────────────────────────
    public function create()
    {
        return view('admin.blogs.create');
    }

    public function analytics()
    {
        $months = collect(range(5, 0))->map(function ($month) {
            $date = now()->subMonths($month);

            return [
                'label' => $date->format('M'),
                'blogs' => Blog::whereYear('created_at', $date->year)->whereMonth('created_at', $date->month)->count(),
                'comments' => BlogComment::whereYear('created_at', $date->year)->whereMonth('created_at', $date->month)->count(),
            ];
        });

        $stats = [
            'total_blogs' => Blog::count(),
            'published_blogs' => Blog::where('status', 'publish')->count(),
            'draft_blogs' => Blog::where('status', 'draft')->count(),
            'total_users' => User::count(),
            'total_comments' => BlogComment::count(),
            'pending_comments' => BlogComment::where('status', 'pending')->count(),
            'approved_comments' => BlogComment::where('status', 'approved')->count(),
        ];

        $recentBlogs = Blog::latest()->limit(5)->get();
        $recentComments = BlogComment::with('blog')->latest()->limit(5)->get();
        $topCategories = Blog::whereNotNull('category')
            ->selectRaw('category, count(*) as total')
            ->groupBy('category')
            ->orderByDesc('total')
            ->limit(6)
            ->get();

        return view('admin.analytics.index', compact('months', 'stats', 'recentBlogs', 'recentComments', 'topCategories'));
    }

    public function settings()
    {
        $settings = [
            'admin_name' => auth()->user()->name ?? 'Admin',
            'admin_email' => auth()->user()->email ?? '',
            'published_blogs' => Blog::where('status', 'publish')->count(),
            'draft_blogs' => Blog::where('status', 'draft')->count(),
            'pending_comments' => BlogComment::where('status', 'pending')->count(),
            'registered_users' => User::count(),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $user = auth()->user();

        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255|unique:users,email,' . $user->id,
            'password'      => 'nullable|string|min:8|confirmed',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $user->name  = $data['name'];
        $user->email = $data['email'];

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        if ($request->hasFile('profile_photo')) {
            // Delete old photo
            if ($user->profile_photo) {
                $old = public_path('uploads/profiles/' . $user->profile_photo);
                if (file_exists($old)) unlink($old);
            }
            $file     = $request->file('profile_photo');
            $filename = 'profile_' . $user->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profiles'), $filename);
            $user->profile_photo = $filename;
        }

        $user->save();

        return redirect()->route('admin.settings')->with('success', 'Profile updated successfully.');
    }

    // ── Admin: store new blog ─────────────────────────────────────────────────
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'description'      => 'required|string',
            'excerpt'          => 'nullable|string|max:500',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
            'author_photo'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
            'status'           => 'required|in:publish,draft',
            'category'         => 'nullable|string|max:100',
            'tags'             => 'nullable|string|max:255',
            'author'           => 'nullable|string|max:255',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data['description'] = html_entity_decode($data['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

        $slug = Str::slug($data['title']);
        $original = $slug; $count = 1;
        while (Blog::where('slug', $slug)->exists()) { $slug = $original . '-' . $count++; }
        $data['slug'] = $slug;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['image'] = $filename;
        }

        if ($request->hasFile('author_photo')) {
            $file = $request->file('author_photo');
            $filename = 'author_' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['author_photo'] = $filename;
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    // ── Admin: show edit form ─────────────────────────────────────────────────
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    // ── Admin: update blog ────────────────────────────────────────────────────
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'description'      => 'required|string',
            'excerpt'          => 'nullable|string|max:500',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
            'status'           => 'required|in:publish,draft',
            'category'         => 'nullable|string|max:100',
            'tags'             => 'nullable|string|max:255',
            'author'           => 'nullable|string|max:255',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data['description'] = html_entity_decode($data['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image) {
                $old = public_path('uploads/blogs/' . $blog->image);
                if (file_exists($old)) unlink($old);
            }
            $file     = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']); // keep existing
        }

        $blog->update($data);

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog updated successfully.');
    }

    // ── Admin: delete blog ────────────────────────────────────────────────────
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            $path = public_path('uploads/blogs/' . $blog->image);
            if (file_exists($path)) unlink($path);
        }
        $blog->delete();

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog deleted successfully.');
    }

    // ── Admin: AJAX live search ───────────────────────────────────────────────
    public function search(Request $request)
    {
        $term  = $request->input('search', '');
        $blogs = Blog::where('title', 'like', "%{$term}%")
                     ->orWhere('description', 'like', "%{$term}%")
                     ->latest()
                     ->limit(20)
                     ->get(['id', 'title', 'description', 'image', 'status', 'category']);

        return response()->json($blogs);
    }

    // ── Public: blog listing page ─────────────────────────────────────────────
    public function uploadImage(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
        ]);

        $file = $request->file('upload');
        $directory = public_path('uploads/blogs/content');

        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $filename = time() . '_' . Str::random(12) . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return response()->json([
            'url' => asset('uploads/blogs/content/' . $filename),
        ]);
    }

    public function publicIndex()
    {
        $blogs = Blog::where('status', 'publish')
                     ->latest()
                     ->paginate(6);

        return view('blog', compact('blogs'));
    }

    // ── Public: single blog detail ────────────────────────────────────────────
    public function publicShow($id)
    {
        $blog = Blog::where('status', 'publish')->findOrFail($id);

        // Related: same category first, then latest, exclude current
        $related = Blog::where('status', 'publish')
                       ->where('id', '!=', $blog->id)
                       ->when($blog->category, fn($q) => $q->where('category', $blog->category))
                       ->latest()
                       ->limit(3)
                       ->get();

        // If not enough from same category, fill with latest
        if ($related->count() < 3) {
            $extra = Blog::where('status', 'publish')
                         ->where('id', '!=', $blog->id)
                         ->whereNotIn('id', $related->pluck('id'))
                         ->latest()
                         ->limit(3 - $related->count())
                         ->get();
            $related = $related->merge($extra);
        }

        // Dynamic category counts for sidebar
        $categories = Blog::where('status', 'publish')
                          ->selectRaw('category, count(*) as total')
                          ->whereNotNull('category')
                          ->groupBy('category')
                          ->orderByDesc('total')
                          ->get();

        return view('blog-details', compact('blog', 'related', 'categories'));
    }
}
