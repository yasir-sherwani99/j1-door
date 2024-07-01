@extends('layouts.admin')

@section('content')

    @if(session()->has('success'))
        <div class="alert alert-success fade show" role="alert">
            <strong>Welldone! </strong>
            {{ session()->get('success') }}
        </div>
    @endif
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(count($products) > 0)
                        <div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <img 
                                                        src="{{ isset($product->images[0]) ? asset($product->images[0]->src) : '#' }}" 
                                                        alt="{{ $product->title }}" 
                                                        height="40"
                                                        onerror="this.onerror=null;this.src='{{ asset('admin-assets/images/default/default-product.jpg') }}';" 
                                                    />
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="#" class="d-inline-block align-middle mb-0 product-name">{{ $product->title }}</a> 
                                                        <br />
                                                        <span class="text-muted font-13">{{ $product->sub_title }}</span> 
                                                    </p>
                                                </td>
                                                <td>{{ $product->categories->name }}</td>
                                                <td class="text-center">
                                                    @if($product->is_active == 1)
                                                        <span class="badge badge-soft-success">Active</span>
                                                    @else
                                                        <span class="badge badge-soft-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">     
                                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                                        <form 
                                                            action="{{ route('products.destroy', $product->id) }}" 
                                                            method="post"
                                                            onsubmit="return confirm('Are you sure?');"
                                                        >                             
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="dropdown-item border-0 bg-transparent">
                                                                Delete
                                                            </button 
                                                        </form>
                                                        <a 
                                                            href="{{ route('admin.document.show', $product->id) }}"
                                                            class="dropdown-item" 
                                                        >
                                                            View Documents
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                            </div> 
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('products.create') }}">
                                        <button class="btn btn-outline-light btn-sm px-4 ">+ Add New</button>
                                    </a>
                                </div><!--end col-->      
                                <div class="col-auto">
                                    {{ $products->links() }}
                                </div> <!--end col-->                               
                            </div><!--end row-->       
                        </div>
                    @else
                        <p class="p-3 pb-0 text-danger">No product found!</p>
                    @endif
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form 
                method="POST" 
                class="needs-validation"             
                id="prod-document-form"
                action="{{ route('admin.specification.store') }}"
                novalidate
            >
                @csrf
                <input type="text" name="product_id" value="{{ $product->id }}" />
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
                                                <td id="col1" style="width: 50%;">
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