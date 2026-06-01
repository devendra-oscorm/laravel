@extends('admin.layout')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Add Blog</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
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

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <!-- ── Left: Main Content ──────────────────────────── -->
            <div class="col-lg-8">

                <!-- Blog Content -->
                <div class="card shadow-none mb-4" id="blog_content">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fs-18"><i class="isax isax-pen-add5 me-2 text-primary"></i>Blog Content</h6>
                        </div>
                    </div>
                    <div class="card-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text"
                                           name="title"
                                           class="form-control"
                                           placeholder="Enter an engaging blog title…"
                                           value="{{ old('title') }}"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Short Excerpt</label>
                                    <textarea name="excerpt"
                                              class="form-control"
                                              rows="2"
                                              placeholder="A brief summary shown on the blog listing page (max 160 chars)…">{{ old('excerpt') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Full Description <span class="text-danger">*</span></label>
                                    <textarea name="description"
                                              id="editor"
                                              class="form-control"
                                              rows="12"
                                              placeholder="Write your full blog content here…">{{ old('description') }}</textarea>
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
                                           placeholder="SEO page title (leave blank to use blog title)"
                                           value="{{ old('meta_title') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <textarea name="meta_description"
                                              class="form-control"
                                              rows="2"
                                              placeholder="SEO description (leave blank to use excerpt)…">{{ old('meta_description') }}</textarea>
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
                        <h5 class="mb-3">Add Blog</h5>
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
                                <option value="draft"   {{ old('status','draft') === 'draft'   ? 'selected' : '' }}>📝 Draft</option>
                                <option value="publish" {{ old('status') === 'publish' ? 'selected' : '' }}>✅ Published</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-select">
                                <option value="">— Select Category —</option>
                                @foreach(['Travel','Guide','Adventure','Tips','Vacation','Rental','Flight Tours','Destination'] as $cat)
                                    <option value="{{ $cat }}" {{ old('category') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <input type="text"
                                   name="tags"
                                   class="form-control"
                                   placeholder="travel, tips, adventure…"
                                   value="{{ old('tags') }}">
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
                        <!-- Preview -->
                        <div id="imagePreviewWrap" style="display:none;" class="mb-3">
                            <img id="imagePreview" src="" alt="Preview"
                                 class="img-fluid rounded w-100"
                                 style="max-height:180px;object-fit:cover;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Image</label>
                            <input type="file"
                                   name="image"
                                   id="imageInput"
                                   class="form-control"
                                   accept="image/*">
                            <div class="form-text fs-13">JPG, PNG, WebP — max 2 MB.</div>
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
                                   placeholder="e.g. John Smith"
                                   value="{{ old('author', auth()->user()->name ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Publish Date</label>
                            <div class="input-icon-end position-relative">
                                <input type="text"
                                       name="published_at"
                                       class="form-control datetimepicker"
                                       placeholder="dd/mm/yyyy"
                                       value="{{ old('published_at', date('d/m/Y')) }}"
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
                        <i class="isax isax-send-25 me-1"></i>Publish Blog
                    </button>
                    <button type="submit"
                            onclick="document.querySelector('[name=status]').value='draft'"
                            class="btn btn-light flex-fill">
                        <i class="isax isax-save-25 me-1"></i>Save Draft
                    </button>
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
let blogEditor;

ClassicEditor.create(document.querySelector('#editor'), {
    toolbar: ['heading','|','bold','italic','underline','|',
              'bulletedList','numberedList','|','blockQuote','link','|','undo','redo'],
}).then(editor => {
    blogEditor = editor;
}).catch(console.error);

// Sync CKEditor content back to textarea before form submits
document.querySelector('form').addEventListener('submit', function () {
    if (blogEditor) {
        document.querySelector('#editor').value = blogEditor.getData();
    }
});

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
