@extends('multiauth::layouts.master') 
@section('main-content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register New {{ ucfirst(config('multiauth.prefix')) }}</div>
                <div class="card-body">
                @include('multiauth::message')
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                    required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }} row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Assign Role</label>

                            <div class="col-md-6">
                                <select name="role_id[]" id="role_id" class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Register
                                </button>

                                <a href="{{ route('admin.show') }}" class="btn btn-danger btn-sm float-right">
                                    Back
                                </a>
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
                    <h2 class="card-title text-center text-info">New Admin Registration</h2>
                    <p class="card-description"></p>
                    <form class="" method="POST" action="{{ route('admin.register') }}" >
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" placeholder="Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                            required autofocus>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                            required>
                        </div>
                        <div class="form-group">
                            <label>Assign Roles to Admin</label>
                            <select class="js-example-basic-multiple {{ $errors->has('role_id') ? ' is-invalid' : '' }}" name="role_id[]" id="role_id" multiple="multiple" style="width:100%">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' text-danger' : '' }}">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required placeholder="Password">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword4">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Register</button>
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