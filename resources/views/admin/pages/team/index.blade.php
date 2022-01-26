@extends('admin.layouts.admin-master')
@section('title')
    Our Teams
@endsection
@push('styles')

    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@endpush
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Our Teams
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Our Teams</li>
        </ol>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                @include('admin.partials.alert_message')
                <div class="box">
                    <div class="box-header">
                        
                        <a href="{{ route('admin.team.create') }}" class="btn btn-info">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            &nbsp; Create</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($teams as $item)


                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="text-center">
                                                <a href="{{ asset('storage/images/team') }}/{{ $item->image }}"
                                                    data-toggle="lightbox"><img
                                                        src="{{ asset('storage/images/team') }}/{{ $item->image }}"
                                                        alt="" style="width:50px; height:50px;"></a>
                                            </div>
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{!! $item->details !!}</td>
                                        <td>
                                            <div class="text-center">

                                                <a href="{{ route('admin.team.edit', [$item->id]) }}"
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
                                                    action="{{ route('admin.team.destroy', [$item->id]) }}">
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
