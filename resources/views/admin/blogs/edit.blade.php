@extends('admin.layout')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Edit Blog</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Page Wrapper -->
<div class="content">
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4" role="alert">
                <i class="isax isax-close-circle5 me-2"></i>
                <strong>Please fix the errors below:</strong>
                <ul class="mb-0 mt-1 ps-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">

            <!-- ── Left: Main Content ──────────────────────────── -->
            <div class="col-lg-8">

                <!-- Blog Content -->
                <div class="card shadow-none mb-4" id="blog_content">
                    <div class="card-header">
                        <h6 class="fs-18"><i class="isax isax-pen-add5 me-2 text-primary"></i>Blog Content</h6>
                    </div>
                    <div class="card-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text"
                                           name="title"
                                           class="form-control"
                                           value="{{ old('title', $blog->title) }}"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Short Excerpt</label>
                                    <textarea name="excerpt"
                                              class="form-control"
                                              rows="2"
                                              placeholder="A brief summary shown on the blog listing page…">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Full Description <span class="text-danger">*</span></label>
                                    <textarea name="description"
                                              id="editor"
                                              class="form-control"
                                              rows="12">{{ old('description', $blog->description) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO -->
                <div class="card shadow-none mb-4" id="seo">
                    <div class="card-header">
                        <h6 class="fs-18"><i class="isax isax-search-normal-15 me-2 text-primary"></i>SEO Settings</h6>
                    </div>
                    <div class="card-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text"
                                           name="meta_title"
                                           class="form-control"
                                           value="{{ old('meta_title', $blog->meta_title ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <textarea name="meta_description"
                                              class="form-control"
                                              rows="2">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Left -->

            <!-- ── Right: Settings ────────────────────────────── -->
            <div class="col-lg-4">

                <!-- Quick nav -->
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Edit Blog</h5>
                        <ul class="add-tab-list">
                            <li><a href="#blog_content" class="active">Blog Content</a></li>
                            <li><a href="#publish_settings">Publish Settings</a></li>
                            <li><a href="#featured_image">Featured Image</a></li>
                            <li><a href="#author_info">Author Info</a></li>
                            <li><a href="#seo">SEO Settings</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Publish Settings -->
                <div class="card shadow-none mb-4" id="publish_settings">
                    <div class="card-header">
                        <h6 class="fs-18"><i class="isax isax-setting-25 me-2 text-primary"></i>Publish Settings</h6>
                    </div>
                    <div class="card-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-select" required>
                                <option value="draft"   {{ old('status', $blog->status) === 'draft'   ? 'selected' : '' }}>📝 Draft</option>
                                <option value="publish" {{ old('status', $blog->status) === 'publish' ? 'selected' : '' }}>✅ Published</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-select">
                                <option value="">— Select Category —</option>
                                @foreach(['Travel','Guide','Adventure','Tips','Vacation','Rental','Flight Tours','Destination'] as $cat)
                                    <option value="{{ $cat }}"
                                        {{ old('category', $blog->category ?? '') === $cat ? 'selected' : '' }}>
                                        {{ $cat }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <input type="text"
                                   name="tags"
                                   class="form-control"
                                   placeholder="travel, tips, adventure…"
                                   value="{{ old('tags', $blog->tags ?? '') }}">
                            <div class="form-text fs-13">Comma-separated tags.</div>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="card shadow-none mb-4" id="featured_image">
                    <div class="card-header">
                        <h6 class="fs-18"><i class="isax isax-gallery5 me-2 text-primary"></i>Featured Image</h6>
                    </div>
                    <div class="card-body pb-1">
                        @if($blog->image)
                            <div class="mb-3">
                                <label class="form-label text-gray-6 fs-13">Current Image</label>
                                <img src="{{ asset('uploads/blogs/'.$blog->image) }}"
                                     alt="Current"
                                     class="img-fluid rounded w-100"
                                     style="max-height:180px;object-fit:cover;">
                            </div>
                        @endif
                        <div id="imagePreviewWrap" style="display:none;" class="mb-3">
                            <label class="form-label text-gray-6 fs-13">New Image Preview</label>
                            <img id="imagePreview" src="" alt="Preview"
                                 class="img-fluid rounded w-100"
                                 style="max-height:180px;object-fit:cover;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ $blog->image ? 'Replace Image' : 'Upload Image' }}</label>
                            <input type="file"
                                   name="image"
                                   id="imageInput"
                                   class="form-control"
                                   accept="image/*">
                            <div class="form-text fs-13">JPG, PNG, WebP — max 2 MB. Leave blank to keep current.</div>
                        </div>
                    </div>
                </div>

                <!-- Author Info -->
                <div class="card shadow-none mb-4" id="author_info">
                    <div class="card-header">
                        <h6 class="fs-18"><i class="isax isax-user-edit5 me-2 text-primary"></i>Author Info</h6>
                    </div>
                    <div class="card-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Author Name</label>
                            <input type="text"
                                   name="author"
                                   class="form-control"
                                   value="{{ old('author', $blog->author ?? auth()->user()->name ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Publish Date</label>
                            <div class="input-icon-end position-relative">
                                <input type="text"
                                       name="published_at"
                                       class="form-control datetimepicker"
                                       placeholder="dd/mm/yyyy"
                                       value="{{ old('published_at', optional($blog->created_at)->format('d/m/Y')) }}"
                                       autocomplete="off">
                                <span class="input-icon-addon">
                                    <i class="isax isax-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary flex-fill">
                        <i class="isax isax-save-25 me-1"></i>Update Blog
                    </button>
                    <a href="{{ route('blogs.index') }}" class="btn btn-light flex-fill">
                        <i class="isax isax-close-circle5 me-1"></i>Cancel
                    </a>
                </div>

            </div>
            <!-- /Right -->

        </div>
        </form>

    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor.create(document.querySelector('#editor'), {
    toolbar: ['heading','|','bold','italic','underline','|',
              'bulletedList','numberedList','|','blockQuote','link','|','undo','redo'],
}).catch(console.error);

document.getElementById('imageInput').addEventListener('change', function () {
    const file = this.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = e => {
        document.getElementById('imagePreview').src = e.target.result;
        document.getElementById('imagePreviewWrap').style.display = 'block';
    };
    reader.readAsDataURL(file);
});
</script>
@endpush
