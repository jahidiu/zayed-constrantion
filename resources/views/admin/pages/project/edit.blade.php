@extends('admin.layouts.admin-master')
@section('title')
    Projects
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Projects
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Projects</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="{{ route('admin.project.index') }}" class="btn btn-info">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    &nbsp; Back</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('admin.project.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                <div class="box-body">
                    <div class="form-group">
                        <label>Categories</label>
                        <select name="category_id" class="form-control">
                            <option>Select One</option>

                            @forelse ($categories as $item)
                            
                                <option value="{{ $item->id }}" {{ $project->category_id ? 'Selected' : '' }}>{{ $item->name }}</option>
                            @empty

                            @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $project->title }}" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="embed_code">Embed code</label>
                        <input type="text" class="form-control" name="embed_code" id="embed_code" value="{{ $project->embed_code }}" placeholder="Embed code">
                    </div>
                    <div class="form-group">
                        <label for="image">Image Upload</label>
                        <input type="file" name="image" id="image">

                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                        <textarea id="editor1" name="details" rows="10" cols="80" style="visibility: hidden; display: none;">
                            {{ $project->details }}
                        </textarea>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>
@endpush