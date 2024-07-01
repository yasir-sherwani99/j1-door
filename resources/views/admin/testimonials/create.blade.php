@extends('layouts.admin')

@section('style')
    <link href="{{ asset('admin-assets/plugins/image-uploader/src/image-uploader.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Testimonial</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form method="POST" class="needs-validation" action="{{ route('testimonials.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label fw-bold">Name <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="name" 
                                    name="name"
                                    placeholder="Enter name"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Name is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">                                
                                <label for="designation" class="form-label fw-bold">Designation <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="designation" 
                                    name="designation"
                                    placeholder="Enter designation"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Designation is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="comment" class="form-label fw-bold">Comment <span class="text-danger">*</span></label>
                                <textarea
                                    id="comment"
                                    name="comment"
                                    class="form-control"
                                    required
                                    rows="7"
                                    placeholder="Enter comment"
                                ></textarea>
                                <div class="invalid-feedback">
                                    Comment is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="images" class="form-label fw-bold">Images <span class="text-danger">*</span></label>
                                <div class="input-images-1"></div>
                                <small class="form-text text-muted">Max 1 image allowed, each image should not exceed 2MB</small>
                                <div class="invalid-feedback">
                                    Image is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check form-switch form-switch-success">
                                        <input class="form-check-input" type="checkbox" name="active" id="activeSwitch" checked>
                                        <label class="form-check-label fw-bold" for="activeSwitch">Active</label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>                                           
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection

@section('script')
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/image-uploader/src/image-uploader.js') }}"></script>
    <script>
        $(function () {
            $('.input-images-1').imageUploader({
                imagesInputName: 'images',
                maxFiles: 1,
                extensions: ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
                maxSize: 2 * 1024 * 1024
            });
        });
    </script>
@endsection
