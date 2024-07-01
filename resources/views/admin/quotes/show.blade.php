@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="met-profile">
                        <div class="row">
                            <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                                <div class="met-profile-main">
                                    <div class="met-profile-main-pic">
                                        <img src="{{ asset('admin-assets/images/users/user-vector.png') }}" alt="J1 Door" height="110" class="rounded-circle">
                                    </div>
                                    <div class="met-profile_user-detail">
                                        <h5 class="met-user-name">{{ $quote->first_name }}&nbsp;{{ $quote->last_name }}</h5>                                                                 
                                    </div>
                                </div>                                                
                            </div><!--end col-->
                            
                            <div class="col-lg-6 ms-auto align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">
                                    <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Phone </b>: {{ $quote->phone }}</li>
                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b>: {{ $quote->email }}</li>                                                   
                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle"></i> <b> Zip Code </b>: {{ $quote->zip }}</li>                                                   
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end f_profile-->                                                                                
                </div><!--end card-body-->
                <hr />
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled faq-qa">
                                <li class="mb-3">
                                    <h6>1. Product Type Interest?</h6>
                                    <p class="font-14 text-muted ms-3">
                                        {{ $quote->product_type }}
                                    </p>
                                </li>
                                <li class="mb-3">
                                    <h6>2. Service or Repair Required?</h6>
                                    <p class="font-14 text-muted ms-3">
                                        {{ $quote->service_type }}
                                    </p>
                                </li>
                                <li class="mb-3">
                                    <h6>3. Details Needs?</h6>
                                    <p class="font-14 text-muted ms-3">
                                        {{ $quote->description }}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
