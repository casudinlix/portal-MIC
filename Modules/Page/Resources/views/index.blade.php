@extends('layouts.master')
@section('title', 'Page')
@section('parentPageTitle', 'App')
@section('css')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <form method="POST" id="search-form" class="form-inline" role="form">

                    <div class="form-group">
                        <label for="name">Name</label>
                        &nbsp;
                        <input type="text" class="form-control" name="name" id="name" placeholder="search name">
                    </div>
                    &nbsp;
                    <div class="form-group">
                        <label for="email">Email</label>
                        &nbsp;
                        <input type="text" class="form-control" name="email" id="email" placeholder="search email">
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button> &nbsp;
                    <div class="text-right">

                        <a href="{{ route('page.create') }}" class="btn btn-warning"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                            Tambah</a>
                    </div>
                </form>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">-</h3>

            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover" id="users">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>

                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
@section('js')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
@endsection
@section('modal')
@endsection
@section('script')

<script>
    const Table=$("#users").DataTable({
        responsive: true,
        searching:false,
        autoWidth: false,
        serverSide: true,
        processing: "<img src='{{ asset('loading_bar.gif') }}'>",
       ajax: {
        url:'{{ route('page.api') }}',
        method: 'POST',
            data: function (d) {
            d.name = $('input[name=name]').val();
            d.email = $('input[name=email]').val();
            }
         },
         columns: [
        {data: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'name', name: 'name'},        
        {data: 'action', name: 'action',orderable: false, searchable: false}
        ],

        });
        $('#search-form').on('submit', function(e) {
        Table.draw();
        e.preventDefault();
        });
</script>
@endsection