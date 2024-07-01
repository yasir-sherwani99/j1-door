@extends('layouts.admin')

@section('style')
    <link href="{{ asset('admin-assets/plugins/image-uploader/src/image-uploader.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @if(session()->has('success'))
        <div class="alert alert-success fade show" role="alert">
            <strong>Welldone! </strong>
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Product</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form method="POST" class="needs-validation" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('put')
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
                                    value="{{ $product->title }}"
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
                                    value="{{ $product->sub_title }}"
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
                                    <option value="{{ $product->categories->id }}">{{ $product->categories->name }}</option>
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
                                >{{ $product->description }}</textarea>
                                <div class="invalid-feedback">
                                    Product description is a required field.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between">
                                    <div class="form-check form-switch form-switch-success">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            name="is_spec" 
                                            id="is_spec" 
                                            onchange="toggleSpecifications()" 
                                            {{ $product->is_specification == 1 ? 'checked' : '' }}
                                        />
                                        <label class="form-check-label fw-bold" for="is_spec" style="color: #656d9a;">Specifications</label>
                                    </div>
                                    <div>
                                        <button 
                                            class="btn btn-success btn-sm"
                                            type="button"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#specificationModal"
                                        >
                                            Add New Specifications
                                        </button>
                                    </div>
                                </div>
                                <?php
                                    $specSection = $product->is_specification == 1 ? 'block' : 'none';
                                ?>
                                <div id="spec-section" style="display: {$specSection};">
                                    @if(count($product->specifications) > 0)
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <td>Spec Name</td>
                                                        <td>Spec Details</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($product->specifications as $spec)
                                                        <tr id="spec-{{ $spec->id }}">
                                                            <td style="width: 40%;">
                                                                <input type="hidden" name="spec_id[]" value="{{ $spec->id }}">
                                                                <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="spec_name[]"
                                                                    placeholder="Enter specification name"
                                                                    value="{{ $spec->spec_name }}"
                                                                />
                                                            </td>
                                                            <td style="width: 50%;">
                                                                <input 
                                                                    type="text" 
                                                                    class="form-control" 
                                                                    name="spec_details[]"
                                                                    placeholder="Enter specification details"
                                                                    value="{{ $spec->spec_details }}"
                                                                />
                                                            </td>
                                                            <td style="width: 10%;">
                                                                <button class="btn btn-outline-danger btn-sm" onclick="deleteSpecification({{ $spec->id }})">
                                                                    <i class="la la-close"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p class="mt-4 text-danger text-center">Product specification section is empty!</p>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch form-switch-success">
                                    <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        name="is_feature" 
                                        id="is_feature" 
                                        onchange="toggleFeatures()" 
                                        {{ $product->is_feature == 1 ? 'checked' : '' }}
                                    />
                                    <label class="form-check-label fw-bold" for="is_feature" style="color: #656d9a;">Features</label>
                                </div>
                                <div id="feature-section" style="display: {{ $product->is_feature == 1 ? 'block' : 'none' }};">
                                    <div class="mt-3">
                                        <label for="features" class="form-label">Product Features</label>
                                        <textarea 
                                            id="features"
                                            name="features"
                                            class="form-control tinymce_editor"
                                            placeholder="Enter product features"
                                        >{{ $product->features }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch form-switch-success">
                                    <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        name="is_support" 
                                        id="is_support" 
                                        onchange="toggleSupport()" 
                                        {{ $product->is_support == 1 ? 'checked' : '' }}
                                    />
                                    <label class="form-check-label fw-bold" for="is_support" style="color: #656d9a;">Support</label>
                                </div>
                                <div id="support-section" style="display: {{ $product->is_support == 1 ? 'block' : 'none' }};">
                                    <div class="mt-3">
                                        <label for="support" class="form-label">Product Support</label>
                                        <textarea 
                                            id="support"
                                            name="support"
                                            class="form-control tinymce_editor"
                                            placeholder="Enter product support"
                                        >{{ $product->support }}</textarea>
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
                                >{{ $product->warranty }}</textarea>
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
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            name="active" 
                                            id="activeSwitch" 
                                            {{ $product->is_active == 1 ? 'checked' : '' }}
                                        />
                                        <label class="form-check-label fw-bold" for="activeSwitch">Active</label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </form>                                           
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
    <div class="modal fade" id="specificationModal" tabindex="-1" role="dialog" aria-labelledby="specificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form 
                method="POST" 
                class="needs-validation"             
                id="prod-specification-form"
                action="{{ route('admin.specification.store') }}"
                novalidate
            >
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="specificationModalLabel">Product Specifications</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
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
                                                        required
                                                    />
                                                </td>
                                                <td id="col1" style="width: 60%;">
                                                    <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="spec_details[]"
                                                        placeholder="Enter specification details"
                                                        required
                                                    />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex my-3 mx-2">
                                    <div class="me-1">
                                        <button 
                                            type="button"
                                            class="btn btn-sm btn-outline-success" 
                                            onclick="addRows()"
                                        >
                                            <i class="mdi mdi-plus me-1"></i>
                                            Add Row
                                        </button>
                                    </div>
                                    <div>
                                        <button 
                                            type="button"
                                            class="btn btn-sm btn-outline-danger" 
                                            onclick="deleteRows()"
                                        >
                                            <i class="mdi mdi-plus me-1"></i>
                                            Delete Row
                                        </button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->                                                      
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-de-primary btn-sm">Save changes</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </form>
        </div><!--end modal-dialog-->
    </div><!--end modal-->
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
            toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist | ' + 'emoticons',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/image-uploader/src/image-uploader.js') }}"></script>
    <script>

        let prodImages = "{{ $prodImages }}";
        let prodImagess = JSON.parse(prodImages.replace(/&quot;/g, '"'));

        $(function () {
            $('.input-images-1').imageUploader({
                preloaded: prodImagess,
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
            } else {
                alert('There should be atleast one row');
            }
        }
    </script>
    <script src="{{ asset('admin-assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script>
        function deleteSpecification(specId)
        {
            let csrf = "{{ csrf_token() }}";
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then(function(result) {
                if (result.isConfirmed) {
                    fetch(`/admin/product-specification/${specId}`, {
                        method: 'DELETE',
                        headers: {
                            "X-CSRF-Token": csrf,
                            "Content-Type": "application/json"
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        document.getElementById(`spec-${data.spec_id}`).style.display = 'none';
                        Swal.fire(
                            'Deleted!',
                            data.message,
                            data.success ? 'success' : 'error'
                        )
                    })
                    .catch(error => console.log(error))   
                }
            })
        }
    </script>
@endsection
