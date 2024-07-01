@extends('layouts.admin')

@section('style')
    <style>
        .tabulator .tabulator-header .tabulator-col {
            background-color: #f1f5fa !important;
         }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Quotes List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="datatable-quotes"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('admin-assets/plugins/tabulator/tabulator.min.js') }}"></script>
    <script>
        let table = new Tabulator('#datatable-quotes', {
            ajaxURL:"/admin/getQuotes",
            layout:"fitColumns",      //fit columns to width of table
            responsiveLayout:"collapse",  //hide columns that dont fit on the table
            pagination:"local",       //paginate the data
            paginationSize:10,         //allow 7 rows per page of data
            placeholder:"<h6>No Data Available</h6>",
            columns:[  
                {title:"#", hozAlign:"left", formatter:"rownum", width:70},               //define the table columns
                {title:"Name", field:"name", headerFilter:"input", widthGrow:2},
                {title:"Product", field:"product", hozAlign:"left", formatter:"textarea", widthGrow: 4},
                {title:"Status", field:"is_view", widthGrow:2, formatter:function(cell, formatterParams){
                    if(cell.getValue() === 0) {
                        return '<span class="badge-soft-danger badge me-2">New</span>';
                    }
                }},
                {title:"Date", field:"date", hozAlign:"left", widthGrow:2, sorter:"date"},
                {title:"Action", field:"action", widthGrow:2, hozAlign:"left", formatter:function(cell, formatterParams){
                    return `<a href="/admin/quote/${cell.getValue()}/details" class="text-white"><button class="btn btn-secondary btn-sm">Details</a>`;
                }},
            ],
        });
    </script>
@endsection