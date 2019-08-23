@extends('multiauth::layouts.master')
@section('main-content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row  justify-content-center">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        @include('multiauth::message')
                        <h2 class="card-title text-center text-info">Edit this Category</h2>
                        <p class="card-description"></p>
                        <form class="" method="POST" action="{{ route('admin.category.update', $category->id) }}" >
                        @csrf @method('patch')
                            <div class="form-group">
                                <label for="exampleInputName1">Category Name</label>
                                <input type="text" value="{{ $category->cat_name }}" name="cat_name" class="form-control" id="cat_name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Category Slug</label>
                                <input type="text" value="{{ $category->cat_slug }}" name="cat_slug" class="form-control" id="cat_slug" required>
                            </div> 
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <a href="{{ route('admin.category') }}" class="btn btn-danger btn-sm float-right">
                                Cancel
                            </a>
                        </form>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $("#cat_name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#cat_slug").val(Text);        
    });
</script>
@endsection