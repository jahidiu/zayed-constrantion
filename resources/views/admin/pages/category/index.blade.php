@extends('admin.layouts.admin-master')
@section('title')
    Categories
@endsection
@push('styles')

    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@endpush
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Categories
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Categories</li>
        </ol>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                @include('admin.partials.alert_message')
                <div class="box">
                    <div class="box-header">

                        <a href="{{ route('admin.category.create') }}" class="btn btn-info">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            &nbsp; Create</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category</th>
                                    <th>Parent Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $item)


                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        @if ($item->parant_id != null)
                                            <td>{{ $item->parant->name }}</td>
                                        @else
                                            <td> </td>
                                        @endif
                                        <td>
                                            <div class="text-center">

                                                <a href="{{ route('admin.category.edit', [$item->id]) }}"
                                                    class="tip" data-original-title="Edit Category"><i
                                                        class="fa fa-edit"></i>
                                                </a>
                                                <a class="" href="#" onclick="
                                                               var result = confirm('Are you sure you want to delete this record?');
                                                               if(result){
                                                               event.preventDefault();
                                                               document.getElementById('delete-form-{{ $item->id }}').submit();
                                                               }">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                                <form method="POST" id="delete-form-{{ $item->id }}"
                                                    action="{{ route('admin.category.destroy', [$item->id]) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Data not Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <!-- jQuery 2.2.3 -->

@endpush
