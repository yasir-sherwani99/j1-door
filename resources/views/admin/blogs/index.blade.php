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
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">                      
                            <h4 class="card-title">Blogs</h4>             
                        </div><!--end col-->                                       
                    </div>  <!--end row-->                                  
                </div><!--end card-header-->
                <div class="card-body">    
                    @if(count($blogs) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>Tags</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td> 
                                                {{ $blog->title }}
                                            </td>
                                            <td>
                                                @foreach ($blog->tag as $singleTag)
                                                    <span class="badge bg-soft-primary">{{ $singleTag->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @if($blog->is_active == 1)
                                                    <span class="badge badge-soft-success">Active</span>
                                                @else
                                                    <span class="badge badge-soft-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>                                                       
                                                <form 
                                                    action="{{ route('blogs.destroy', $blog->id) }}" 
                                                    method="post"
                                                    onsubmit="return confirm('Are you sure?');"
                                                >                             
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('blogs.edit', $blog->id) }}">
                                                        <i class="las la-pen text-secondary font-16"></i>
                                                    </a>
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="las la-trash-alt text-secondary font-16"></i>
                                                    </button>
                                                </form>                                                  
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table><!--end /table-->
                        </div><!--end /tableresponsive-->
                    @else
                        <p>No blog found!</p>
                    @endif
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('blogs.create') }}">
                                <button class="btn btn-outline-light btn-sm px-4 ">+ Add New</button>
                            </a>
                        </div><!--end col-->      
                        <div class="col-auto">
                            {{ $blogs->links() }}
                        </div> <!--end col-->                               
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div><!--end row-->

@endsection