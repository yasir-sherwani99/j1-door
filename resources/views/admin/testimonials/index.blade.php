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
                            <h4 class="card-title">Our Regular Customers</h4>             
                        </div><!--end col-->                                       
                    </div>  <!--end row-->                                  
                </div><!--end card-header-->
                <div class="card-body">    
                    @if(count($testimonials) > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Users</th>
                                        <th>Designation</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($testimonials as $testimonial)
                                        <tr>
                                            <td>
                                                <img 
                                                    src="{{ asset($testimonial->picture) }}" 
                                                    alt="" 
                                                    class="rounded-circle thumb-sm me-1"
                                                /> 
                                                    {{ $testimonial->name }}
                                            </td>
                                            <td>{{ $testimonial->designation }}</td>
                                            <td>{{ Str::limit($testimonial->comment, 70) }}</td>
                                            <td>
                                                @if($testimonial->is_active == 1)
                                                    <span class="badge badge-soft-success">Active</span>
                                                @else
                                                    <span class="badge badge-soft-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>                                                       
                                                <form 
                                                    action="{{ route('testimonials.destroy', $testimonial->id) }}" 
                                                    method="post"
                                                    onsubmit="return confirm('Are you sure?');"
                                                >                             
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('testimonials.edit', $testimonial->id) }}">
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
                        <p>No testimonial found!</p>
                    @endif
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div><!--end row-->

@endsection