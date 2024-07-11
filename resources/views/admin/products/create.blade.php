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
                    <h4 class="card-title">Create Product</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form method="POST" class="needs-validation" action="{{ route('products.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label fw-bold">Title <span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="title" 
                                    name="title"
                                    placeholder="Enter product title"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Product title is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">                                
                                <label for="sub_title" class="form-label fw-bold">Sub Title</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="sub_title" 
                                    name="sub_title"
                                    placeholder="Enter product sub title"
                                />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">                                
                                <label for="category_id" class="form-label fw-bold">Category <span class="text-danger">*</span></label>                                            
                                <select 
                                    class="form-select" 
                                    aria-label="Select category"
                                    name="category_id"
                                    id="category_id"
                                    required
                                >
                                    <option value="">Select Category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Category is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="description" class="form-label fw-bold">Description <span class="text-danger">*</span></label>
                                <textarea
                                    id="description"
                                    name="description"
                                    class="form-control tinymce_editor"
                                    required
                                    placeholder="Enter product description"
                                ></textarea>
                                <div class="invalid-feedback">
                                    Product description is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" name="is_spec" id="is_spec" onchange="toggleSpecifications()" />
                                    <label class="form-check-label fw-bold" for="is_spec" style="color: #656d9a;">Specifications</label>
                                </div>
                                <div id="spec-section" style="display: none;">
                                    <div class="table-responsive">
                                        <table class="table mb-0" id="emptbl">
                                            <thead>
                                                <tr>
                                                    <td>Spec Name</td>
                                                    <td>Spec Details</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td id="col0" style="width: 40%;">
                                                        <input 
                                                            type="text" 
                                                            class="form-control" 
                                                            name="spec_name[]"
                                                            placeholder="Enter specification name"
                                                        />
                                                    </td>
                                                    <td id="col1" style="width: 60%;">
                                                        <input 
                                                            type="text" 
                                                            class="form-control" 
                                                            name="spec_details[]"
                                                            placeholder="Enter specification details"
                                                        />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex my-3 mx-2">
                                        <div class="me-1">
                                            <button class="btn btn-sm btn-outline-success" onclick="addRows()">
                                                <i class="mdi mdi-plus me-1"></i>
                                                Add Row
                                            </button>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm btn-outline-danger" onclick="deleteRows()">
                                                <i class="mdi mdi-plus me-1"></i>
                                                Delete Row
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" name="is_feature" id="is_feature" onchange="toggleFeatures()" />
                                    <label class="form-check-label fw-bold" for="is_feature" style="color: #656d9a;">Features</label>
                                </div>
                                <div id="feature-section" style="display: none;">
                                    <div class="mt-3">
                                        <label for="features" class="form-label">Product Features</label>
                                        <textarea 
                                            id="features"
                                            name="features"
                                            class="form-control tinymce_editor"
                                            placeholder="Enter product features"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" name="is_support" id="is_support" onchange="toggleSupport()" />
                                    <label class="form-check-label fw-bold" for="is_support" style="color: #656d9a;">Support</label>
                                </div>
                                <div id="support-section" style="display: none;">
                                    <div class="mt-3">
                                        <label for="support" class="form-label">Product Support</label>
                                        <textarea 
                                            id="support"
                                            name="support"
                                            class="form-control tinymce_editor"
                                            placeholder="Enter product support"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="warranty" class="form-label fw-bold">Warranty</label>
                                <textarea
                                    id="warranty"
                                    name="warranty"
                                    class="form-control tinymce_editor"
                                    required
                                    placeholder="Enter product warranty"
                                ></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="images" class="form-label fw-bold">Images <span class="text-danger">*</span></label>
                                <div class="input-images-1"></div>
                                <small class="form-text text-muted">Max 5 images allowed, each image should not exceed 2MB</small>
                                <div class="invalid-feedback">
                                    Product images is a required field.
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
    <script src="{{ asset('admin-assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.tinymce_editor',
            menubar: false,
            statusbar: false,
            readonly: false,
            height: 200,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | ' + ' | link image | ' +
                'bullist numlist | ' + 'emoticons',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/image-uploader/src/image-uploader.js') }}"></script>
    <script>
        $(function () {
            $('.input-images-1').imageUploader({
                imagesInputName: 'images',
                maxFiles: 5,
                extensions: ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
                maxSize: 2 * 1024 * 1024
            });
        });
    </script>
    <script>
        function toggleSpecifications()
        {
            let isSpecChecked = document.getElementById('is_spec').checked;
            if(isSpecChecked) {
                document.getElementById('spec-section').style.display = "block";
            } else {
                document.getElementById('spec-section').style.display = "none";
            }
        }
        function toggleFeatures()
        {
            let isFeatureChecked = document.getElementById('is_feature').checked;
            if(isFeatureChecked) {
                document.getElementById('feature-section').style.display = "block";
            } else {
                document.getElementById('feature-section').style.display = "none";
            }
        }
        function toggleSupport()
        {
            let isSupportChecked = document.getElementById('is_support').checked;
            if(isSupportChecked) {
                document.getElementById('support-section').style.display = "block";
            } else {
                document.getElementById('support-section').style.display = "none";
            }
        }
    </script>
    <script>
        function addRows(){ 
            let table = document.getElementById('emptbl');
            let rowCount = table.rows.length;
            let cellCount = table.rows[0].cells.length; 
            let row = table.insertRow(rowCount);
            for(let i =0; i <= cellCount; i++){
                let cell = 'cell'+i;
                cell = row.insertCell(i);
                let copycel = document.getElementById('col'+i).innerHTML;
                cell.innerHTML=copycel;
            }
        }
        
        function deleteRows(){
            let table = document.getElementById('emptbl');
            let rowCount = table.rows.length;
            if(rowCount > '2'){
                let row = table.deleteRow(rowCount-1);
                rowCount--;
            }
            else{
                alert('There should be atleast one row');
            }
        }
    </script>
@endsection
