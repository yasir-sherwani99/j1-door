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
                    <h4 class="card-title">Create Blog</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form method="POST" class="needs-validation" action="{{ route('blogs.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label fw-bold">Title <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="title" 
                                    name="title"
                                    placeholder="Enter blog title"
                                    required
                                    value="{{ old('title') }}"
                                />
                                <div class="invalid-feedback">
                                    Blog title is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="sub_title" class="form-label fw-bold">Subtitle</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="sub_title" 
                                    name="sub_title"
                                    placeholder="Enter blog sub title"
                                    required
                                    value="{{ old('sub_title') }}"
                                />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">                                
                                <label for="tags" class="form-label fw-bold">Tags <span class="text-danger">*</span></label>                                            
                                <select 
                                    class="form-select" 
                                    aria-label="Select category"
                                    name="tags[]"
                                    id="multiSelect"
                                    required
                                >
                                    <option value="">Select Tags</option>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Multiple select</small>
                                <div class="invalid-feedback">
                                    Blog tags is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="content" class="form-label fw-bold">Content <span class="text-danger">*</span></label>
                                <textarea
                                    id="content"
                                    name="content"
                                    class="form-control tinymce_editor"
                                    required
                                    placeholder="Enter blog content"
                                >{{ old('content') }}</textarea>
                                <div class="invalid-feedback">
                                    Blog content is a required field.
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
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="images" class="form-label fw-bold">Cover Image <span class="text-danger">*</span></label>
                                <div class="input-images-1"></div>
                                <small class="form-text text-muted">Max 1 images allowed, each image should not exceed 2MB</small>
                                <div class="invalid-feedback">
                                    Blog images is a required field.
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
    <script src="{{ asset('admin-assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.tinymce_editor',
            menubar: false,
            statusbar: false,
            readonly: false,
            height: 500,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | ' + ' | link image media fullpage | ' +
                'bullist numlist | ' + 'emoticons',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    <script src="{{ asset('admin-assets/plugins/select/selectr.min.js') }}"></script>
    <script>
        new Selectr('#multiSelect',{
            multiple: true
        });
    </script>
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
