<?php $page="add-visa";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-08 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Add Visa</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Visa</li>
                            <li class="breadcrumb-item active" aria-current="page">Add Visa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-lg-3 theiaStickySidebar">
                    <div class="card border-0 mb-4 mb-lg-0">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-3">Add Cruise</h5>
                                <ul class="add-tab-list">
                                    <li><a href="#basic_info" class="active">Basic Info</a></li>
                                    <li><a href="#documents_requirement">Documents Requirement</a></li>
                                    <li><a href="#additional_requirement">Additional Requirement</a></li>
                                    <li><a href="#conditional_requirement">Conditional Requirement</a></li>
                                    <li><a href="#important_note">Important Note</a></li>
                                    <li><a href="#common_reasons_for_rejection">Common Reasons for Rejection</a></li>
                                    <li><a href="#description">Description</a></li>
                                    <li><a href="#faq">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <div class="col-lg-9">
                    <form action="{{url('visa-grid')}}">
                        <div class="card shadow-none" id="basic_info">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fs-18">Basic Info</h6>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="img-fluid avatar avatar-xxl br-10 bg-light border text-dark flex-shrink-0 me-3"><i
                                                    class="isax isax-image"></i></span>
                                            <div>
                                                <p class="fs-14 text-gray-6 fw-normal mb-2">Recommended dimensions are
                                                    typically 400 x 400 pixels.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <label class="upload-btn" for="fileUpload">Upload</label>
                                                        <input type="file" id="fileUpload" style="display: none;">
                                                    </div>
                                                    <a href="#" class="btn btn-light btn-md">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Title<span
                                                    class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Category<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Luxury Cruise</option>
                                                <option>Adventure Cruise</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Mode<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Luxury Cruise</option>
                                                <option>Adventure Cruise</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Validity<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Luxury Cruise</option>
                                                <option>Adventure Cruise</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Processing Duration<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Luxury Cruise</option>
                                                <option>Adventure Cruise</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="documents_requirement">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Documents Requirement</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row add-requirement-info">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Requirement</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-requirement"><i
                                            class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="additional_requirement">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Additional Requirement</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row add-additional-requirement-info">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Additional Requirement</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-additional-requirement"><i
                                            class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="conditional_requirement">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Conditional Requirement</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row add-conditional-requirement-info">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Conditional Requirement</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-conditional-requirement"><i
                                            class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="important_note">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Important Note</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row add-important-note-info">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Important Note</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-important-note"><i
                                            class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="common_reasons_for_rejection">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Common Reasons for Rejection</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row add-common-reasons-for-rejection-info">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Common Reasons for Rejection</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-common-reasons-for-rejection"><i
                                            class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="description">
                            <div class="card-header">
                                <h5 class="fs-18">Description</h5>
                            </div>
                            <div class="card-body text-editor">
                                <div class="snow-editor"></div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="faq">
                            <div class="card-header">
                                <h5 class="fs-18">FAQ</h5>
                            </div>
                            <div class="card-body">
                                <div class="card shadow-none mb-3">
                                    <div class="card-body px-3 py-2">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h6><a href="#">Does offer free cancellation for a full refund?</a></h6>
                                            <div class="d-flex align-items-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                    class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                    <i class="isax isax-edit-2"></i>
                                                </a>
                                                <a href="#"
                                                    class="trash-icon d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                    <i class="isax isax-trash text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none mb-3">
                                    <div class="card-body px-3 py-2">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h6><a href="#">Is there a pool?</a></h6>
                                            <div class="d-flex align-items-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                    class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                    <i class="isax isax-edit-2"></i>
                                                </a>
                                                <a href="#"
                                                    class="trash-icon d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                    <i class="isax isax-trash text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#add_faq">
                                        <i class="isax isax-add-circle me-1"></i>Add New
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-light me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



