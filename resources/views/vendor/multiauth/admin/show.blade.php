@extends('multiauth::layouts.master') 
@section('main-content')
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
                @include('multiauth::message')
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <h3 class="card-title mb-0"> All Admins</h3>
                  <a href="{{route('admin.register')}}" class="btn btn-sm btn-success ml-auto"><i class="mdi mdi-plus"></i>New {{ ucfirst(config('multiauth.prefix')) }}</a>
                </div>
                <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                          <th>Order #</th>
                          <th>Name</th>
                          <th>Roles</th>
                          <th>Email</th>     
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                            <?php $i = 1; ?>
                            @foreach ($admins as $admin)
                            <tr>                                
                                <td>{{ $i }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>
                                    @foreach ($admin->roles as $role)
                                        <span class="badge-warning badge-pill ml-2">
                                            {{ $role->name }}
                                        </span>
                                     @endforeach
                                </td>
                                <td>{{ $admin->email }}</td>
                                <td><label class="badge badge-info {{ $admin->active? 'badge-info' : 'badge-danger' }}">{{ $admin->active? 'Active' : 'Inactive' }}</label></td>
                                <td>
                                    <a href="#" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                        @csrf @method('delete')
                                    </form>    
                                    <a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-outline-primary">Edit</a>
                                </td>
                            </tr>
                            <?php $i++; ?>

                            @endforeach @if($admins->count()==0)
                            <tr>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</tr>
                            @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>   
    </div>
  
       
@endsection



{{-- <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    {{ ucfirst(config('multiauth.prefix')) }} List
                                    <span class="float-right">
                                        <a href="{{route('admin.register')}}" class="btn btn-sm btn-success">New {{ ucfirst(config('multiauth.prefix')) }}</a>
                                    </span>
                                </div>
                                <div class="card-body">
                                @include('multiauth::message')
                                    <ul class="list-group">
                                        @foreach ($admins as $admin)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $admin->name }}
                                            <span class="badge">
                                                    @foreach ($admin->roles as $role)
                                                        <span class="badge-warning badge-pill ml-2">
                                                            {{ $role->name }}
                                                        </span> @endforeach
                                            </span>
                                            {{ $admin->active? 'Active' : 'Inactive' }}
                                            <div class="float-right">
                                                <a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a>
                                                <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                                    @csrf @method('delete')
                                                </form>
                
                                                <a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a>
                                            </div>
                                        </li>
                                        @endforeach @if($admins->count()==0)
                                        <p>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


              <div class="row"> --}}