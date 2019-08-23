@extends('multiauth::layouts.master') 
@section('main-content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">Add New Role</div>

                <div class="card-body">
                @include('multiauth::message')
                    <form action="{{ route('admin.role.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" placeholder="Give an awesome name for role" name="name" class="form-control" id="role" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Store</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-sm btn-danger float-right">Back</a>
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
                        <h2 class="card-title text-center text-info">New Admin Registration</h2>
                        <p class="card-description"></p>
                        <form class="" method="POST" action="{{ route('admin.role.store') }}" >
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" placeholder="Give an awesome name for role" name="name" class="form-control" id="role" required>
                            </div> 
                            <button type="submit" class="btn btn-success mr-2">Add Role</button>
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