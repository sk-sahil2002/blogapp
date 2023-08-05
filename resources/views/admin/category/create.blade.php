@extends('Layouts\master')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="">Add category here:-</h1>
        </div>
        <div class="card-body">

        <form action="{{ url('admin/add-category') }}" method="POSt" enctype="multipart/form-data">

             @csrf
             @method('PUT')
            
            <div class="mb-3">
                <label>Category name</label>
                <input type="text" name="name" class="form-comtrol">
            </div>
            <div class="mb-3">
                <label>Slug</label>
                <input type="text" name="slug" class="form-comtrol">
            </div>
            <div class="mb-3">
                <label>Description</label>
                <input type="text" name="description" class="form-comtrol">
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-comtrol">
            </div>
            <h6>SEO Tags</h6>
            <div class="mb-3">
                <label>Meta Titles</label>
                <input type="text" name="meta_title" class="form-comtrol">
            </div>
            <div class="mb-3">
                <label>Meta Description</label>
                <textarea type="text" name="meta_description" class="form-comtrol"></textarea>
            </div>
            <div class="mb-3">
                <label>Meta Keys</label>
                <textarea type="text" name="meta_keywords" class="form-comtrol"></textarea>
            </div>
            <h6>Status MODE</h6>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label>NavBar Status</label>
                    <input type="checkbox" name="navbar_status" />
                </div>
                <div class="col-md-3 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" />
                </div>
                <div class="com-md_6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>

        </form>
        </div>
    </div>
</div>
@endsection