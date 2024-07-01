@extends('layouts.admin')

@section('style')
    <style>
        .tabulator .tabulator-header .tabulator-col {
            background-color: #f1f5fa !important;
         }
    </style>
@endsection

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
                    <h4 class="card-title">Distributors List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="datatable-distributors"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('admin-assets/plugins/tabulator/tabulator.min.js') }}"></script>
    <script>
        let table = new Tabulator('#datatable-distributors', {
            ajaxURL:"/admin/getDistributors",
            layout:"fitColumns",      //fit columns to width of table
            responsiveLayout:"collapse",  //hide columns that dont fit on the table
            pagination:"local",       //paginate the data
            paginationSize:10,         //allow 7 rows per page of data
            placeholder:"<h6>No Data Available</h6>",
            columns:[  
                {title:"#", hozAlign:"left", formatter:"rownum", width:70},               //define the table columns
                {title:"Name", field:"name", headerFilter:"input", widthGrow:4},
                {title:"Category", field:"category", hozAlign:"left", widthGrow: 2},
                {title:"Phone", field:"phone", hozAlign:"left", widthGrow: 2},
                {title:"Status", field:"status", widthGrow:2, formatter:function(cell, formatterParams){
                    if(cell.getValue() === 1) {
                        return '<span class="badge-soft-success badge me-2">Active</span>';
                    } else {
                        return '<span class="badge-soft-danger badge me-2">Inactive</span>';
                    }
                }},
                {title:"Action", field:"action", widthGrow:2, hozAlign:"left", formatter:function(cell, formatterParams){
                    return `<a href="/admin/distributors/${cell.getValue()}/edit"><i class="las la-pen text-secondary font-16"></i></a>`;
                }},
                // {formatter:"buttonCross", width:40, align:"center", cellClick:function(e, cell){
                //     cell.getRow().delete(); 
                // }},
            ],
        });
    </script>
@endsection