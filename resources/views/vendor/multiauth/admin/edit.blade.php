@extends('multiauth::layouts.master')
@section('main-content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit details of {{$admin->name}}</div>

                <div class="card-body">
                    @include('multiauth::message')
                    <form action="{{route('admin.update',[$admin->id])}}" method="post">
                        @csrf @method('patch')
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Name</label>
                            <input type="text" value="{{ $admin->name }}" name="name" class="form-control col-md-6" id="role">
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Email</label>
                            <input type="text" value="{{ $admin->email }}" name="email" class="form-control col-md-6" id="role">
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Assign Role</label>

                            <select name="role_id[]" id="role_id" class="form-control col-md-6 {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                <option selected disabled>Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        @if (in_array($role->id,$admin->roles->pluck('id')->toArray())) 
                                            selected 
                                        @endif >{{ $role->name }}
                                    </option>
                                @endforeach
                            </select> 

                            @if ($errors->has('role_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('role_id') }}</strong>
                                </span> 
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="active" class="col-md-4 col-form-label text-md-right">Active</label>
                            <input type="checkbox" value="1" {{ $admin->active ? 'checked':'' }} name="activation" class="form-control col-md-6" id="active">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    Change
                                </button>
                                <a href="{{ route('admin.show') }}" class="btn btn-danger btn-sm float-right">Back</a>
                            </div>
                        </div>
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
                    <h2 class="card-title text-center text-info">Edit details of {{$admin->name}}</h2>
                    <p class="card-description"></p>
                    <form action="{{route('admin.update',[$admin->id])}}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" placeholder="Name" value="{{ $admin->name }}" class="form-control" name="name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" value="{{ $admin->email }}" placeholder="Email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Assign Roles to Admin</label>
                            <select class="js-example-basic-multiple {{ $errors->has('role_id') ? ' is-invalid' : '' }}" name="role_id[]" id="role_id" multiple="multiple" style="width:100%">
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}" 
                                    @if (in_array($role->id,$admin->roles->pluck('id')->toArray())) 
                                        selected 
                                    @endif >{{ $role->name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('role_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('role_id') }}</strong>
                                </span> 
                            @endif
                        </div>
                        <div class="form-check form-check-flat mt-0">
                            <label class="form-check-label">
                              <input type="checkbox" value="1" {{ $admin->active ? 'checked':'' }} name="activation" class="form-control col-md-6" id="active">
                              Activate
                            <i class="input-helper"></i></label>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Update</button>
                        <a href="{{ route('admin.show') }}" class="btn btn-danger btn-sm float-right">
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
