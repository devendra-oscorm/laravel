<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
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

    // ── Admin: store new blog ─────────────────────────────────────────────────
    public function store(Request $request)
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

        // Generate unique slug
        $slug = Str::slug($data['title']);
        $original = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $original . '-' . $count++;
        }
        $data['slug'] = $slug;

        // Handle image upload
        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['image'] = $filename;
        }

        Blog::create($data);

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog created successfully.');
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
    public function publicIndex()
    {
        $blogs = Blog::where('status', 'publish')
                     ->latest()
                     ->paginate(9);

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
