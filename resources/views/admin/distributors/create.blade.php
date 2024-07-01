@extends('layouts.admin')

@section('style')
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
                    <h4 class="card-title">Create Distributor</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form method="POST" class="needs-validation" action="{{ route('distributors.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label fw-bold">Name <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="name" 
                                    name="name"
                                    placeholder="Enter company name"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Company name is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">                                
                                <label for="category" class="form-label fw-bold">Category <span class="text-danger">*</span></label>                                            
                                <select 
                                    class="form-select" 
                                    aria-label="Select category"
                                    name="category"
                                    id="category"
                                    required
                                >
                                    <option value="">Select Category</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="residential">Residential</option>
                                    <option value="both">Commercial & Residential</option>
                                </select>
                                <div class="invalid-feedback">
                                    Category is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">                                
                                <label for="email" class="form-label fw-bold">Email </label>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    id="email" 
                                    name="email"
                                    placeholder="Enter company email"
                                />
                            </div>
                            <div class="col-md-6">                                
                                <label for="phone" class="form-label fw-bold">Phone </label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="phone" 
                                    name="phone"
                                    placeholder="Enter company phone"
                                />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">                                
                                <label for="website" class="form-label fw-bold">Website</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="website" 
                                    name="website"
                                    placeholder="Enter company website"
                                />
                                <small class="form-text text-muted">e.g. https://www.abc.com</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">                                
                                <label for="address" class="form-label fw-bold">Address <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="address" 
                                    name="address"
                                    placeholder="Enter company address"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Company address is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">                                
                                <label for="latitude" class="form-label fw-bold">Latitude <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="latitude" 
                                    name="latitude"
                                    placeholder="Enter company latitude"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Company latitude is a required field.
                                </div>
                            </div>
                            <div class="col-md-6">                                
                                <label for="longitude" class="form-label fw-bold">Longitude <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="longitude" 
                                    name="longitude"
                                    placeholder="Enter company longitude"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Company longitude is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="description" class="form-label fw-bold">Description</label>
                                <textarea
                                    id="description"
                                    name="description"
                                    class="form-control tinymce_editor"
                                    placeholder="Enter company description"
                                ></textarea>
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
    <script src="{{ asset('admin-assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.tinymce_editor',
            menubar: false,
            statusbar: false,
            readonly: false,
            height: 250,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist | ' + 'emoticons',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
@endsection
