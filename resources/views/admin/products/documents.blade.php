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
                    <h4 class="card-title">Product Documents</h4>
                </div><!--end card-header-->
                <div class="card-body">
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
                                disabled
                            />
                            <div class="invalid-feedback">
                                Product title is a required field.
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
                                        name="is_doc" 
                                        id="is_doc" 
                                        onchange="toggleDocuments()" 
                                        checked
                                    />
                                    <label class="form-check-label fw-bold" for="is_spec" style="color: #656d9a;">Documents</label>
                                </div>
                                <div>
                                    <button 
                                        class="btn btn-success btn-sm"
                                        type="button"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#documentModal"
                                    >
                                        Add New Documents
                                    </button>
                                </div>
                            </div>
                            <?php
                                $docSection = $product->is_documents == 1 ? 'block' : 'none';
                            ?>
                            <div id="doc-section" style="display: {$docSection};">
                                @if(count($product->documents) > 0)
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <td>Document(s)</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($product->documents as $doc)
                                                    <tr id="doc-{{ $doc->id }}">
                                                        <td style="width: 85%;">
                                                            <input type="hidden" name="doc_id[]" value="{{ $doc->id }}">
                                                            <h5>{{ $doc->name }} <i class="lar la-file-pdf text-danger"></i></h5>
                                                        </td>
                                                        <td style="width: 15%;">
                                                            <button class="btn btn-outline-danger btn-sm" onclick="deleteDocument({{ $doc->id }})">
                                                                <i class="la la-close"></i>
                                                            </button>
                                                            <a href="{{ route('admin.document.download', $doc->id) }}">
                                                                <button class="btn btn-outline-danger btn-sm">
                                                                    <i class="las la-download file-download-icon"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p class="mt-4 text-danger text-center">Product document section is empty!</p>
                                @endif
                                
                            </div>
                        </div>
                    </div>                                        
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
    <div class="modal fade bd-example-modal-lg" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form 
                method="POST" 
                class="needs-validation"             
                id="prod-document-form"
                action="{{ route('admin.document.store') }}"
                enctype="multipart/form-data"
                novalidate
            >
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="documentModalLabel">Product Documents</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table mb-0" id="emptbl">
                                        <thead>
                                            <tr>
                                                <td>Doc Name</td>
                                                <td>Doc Files</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td id="col0" style="width: 30%;">
                                                    <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        name="doc_name[]"
                                                        placeholder="Enter document name"
                                                        required
                                                    />
                                                    <small class="form-text text-muted">Custom file name</small>
                                                </td>
                                                <td id="col1" style="width: 70%;">
                                                    <input 
                                                        type="file" 
                                                        class="form-control" 
                                                        name="doc_files[]"
                                                        accept="application/pdf"
                                                        required
                                                    />
                                                    <small class="form-text text-muted">Only pdf files are allowed, max file size is 5MB.</small>
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
    <script>
        function toggleDocuments()
        {
            let isDocumentChecked = document.getElementById('is_doc').checked;
            if(isDocumentChecked) {
                document.getElementById('doc-section').style.display = "block";
            } else {
                document.getElementById('doc-section').style.display = "none";
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
        function deleteDocument(docId)
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
                    fetch(`/admin/product-document/${docId}`, {
                        method: 'DELETE',
                        headers: {
                            "X-CSRF-Token": csrf,
                            "Content-Type": "application/json"
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        document.getElementById(`doc-${data.doc_id}`).style.display = 'none';
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

        function downloadDocument(docId)
        {

        }
    </script>
@endsection
