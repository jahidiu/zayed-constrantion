@extends('admin.layouts.admin-master')
@section('title')
    Expert Spotlight
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Expert Spotlight
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Expert Spotlight</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="{{ route('admin.expert.index') }}" class="btn btn-info">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    &nbsp; Back</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('admin.expert.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" name="name" id="title" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" name="designation" id="designation"
                            placeholder="designation">
                    </div>
                    <div class="form-group">
                        <label for="image">Image Upload</label>
                        <input type="file" name="image" id="image">

                    </div>
                    <div class="form-group">
                        <label for="details">Speech</label>
                        <textarea id="editor1" name="speech" rows="10" cols="80"
                            style="visibility: hidden; display: none;"  required></textarea>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
@endsection
@push('scripts')
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>
@endpush
