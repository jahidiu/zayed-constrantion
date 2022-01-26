@extends('admin.layouts.admin-master')
@section('title')
    Cteate Category
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cteate Category
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Category</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="{{ route('admin.category.index') }}" class="btn btn-info">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    &nbsp; Back</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="form-group">
                        <label for="category">Parent Category</label>
                        <select name="parant_id" class="form-control" id="category">
                            <option value="" disabled selected>Select Category</option>

                            @foreach ($parentCategories as $category)

                                <option style="color: black; font-weight:800;" value="{{ $category->id }}">{{ $category->name }}</option>
                                @if (count($category->subcategories))
                                    @include('admin.pages.category.sub-category-list',['subcategories' =>
                                    $category->subcategories])

                                @endif

                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Category Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Category name"
                            required>
                    </div>
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

@endpush
