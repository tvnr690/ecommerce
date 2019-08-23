@extends('multiauth::layouts.master') 
@section('main-content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit this Role</div>

                <div class="card-body">
                    <form action="{{ route('admin.role.update', $role->id) }}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" value="{{ $role->name }}" name="name" class="form-control" id="role">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Change</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-danger btn-sm float-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="main-panel">
        <div class="content-wrapper">
            <div class="row  justify-content-center">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        @include('multiauth::message')
                        <h2 class="card-title text-center text-info">Edit this Role</h2>
                        <p class="card-description"></p>
                        <form class="" method="POST" action="{{ route('admin.role.update', $role->id) }}" >
                        @csrf @method('patch')
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" value="{{ $role->name }}" name="name" class="form-control" id="role" required>
                            </div> 
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <a href="{{ route('admin.roles') }}" class="btn btn-danger btn-sm float-right">
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