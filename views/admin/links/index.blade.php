@extends('admin.layouts.layout')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $('#datatable').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
    </script>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>{{ $title }}</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin-panel/dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">{{ $title }}</li>
        </ol>
    </section>

    <section class="content">
        @if(session('message'))
            <div class="alert alert-info">{{ flash('message') }}</div>
        @endif
        <div class="box">
            <div class="box-header">
                {{ $title }}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full url</th>
                        <th>Short url</th>
                        <th>User</th>
                        <th>Click</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($links as $link)
                        <tr>
                            <td>{{ $link->id }}</td>
                            <td><a href="{{ $link->full_url }}" target="_blank">{{ $link->full_url }}</a></td>
                            <td><a href="{{ url('link/' . $link->short_url) }}" target="_blank">{{ $link->short_url }}</a></td>
                            <td>{{ isset($link->user) ? $link->user->first_name : '-'}}</td>
                            <td>{{ $link->click }}</td>
                            <td>
                                <a href="#" data-action="{{ url('admin-panel/links/'. $link->id . '/delete') }}" class="btn btn-danger delete_confirmation" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Full url</th>
                        <th>Short url</th>
                        <th>User</th>
                        <th>Click</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>

    @include('admin.layouts.delete_modal')
@endsection