@extends('multiauth::layouts.master') 
@section('main-content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Roles
                    <span class="float-right">
                        <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a>
                    </span>
                </div>

                <div class="card-body">
    @include('multiauth::message')
                    <ol class="list-group">
                        @foreach ($roles as $role)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $role->name }}
                            <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</span>
                            <div class="float-right">
                                <a href="" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{ route('admin.role.edit',$role->id) }}" class="btn btn-sm btn-primary mr-3">Edit</a>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
                @include('multiauth::message')
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <h3 class="card-title mb-0">Roles List</h3>
                  <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success ml-auto"><i class="mdi mdi-plus"></i>New Role</a>
                </div>
                <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                          <th>Order #</th>
                          <th>Name</th>
                          <th>Roles</th>
                          {{-- <th>Email</th>      --}}
                          {{-- <th>Status</th> --}}
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                            <?php $i = 1; ?>
                            @foreach ($roles as $role)
                            <tr>                                
                                <td>{{ $i }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</td>
                                {{-- <td>{{ $admin->email }}</td> --}}
                                {{-- <td><label class="badge badge-info {{ $admin->active? 'badge-info' : 'badge-danger' }}">{{ $admin->active? 'Active' : 'Inactive' }}</label></td> --}}
                                <td>
                                    <a href="" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                        @csrf @method('delete')
                                    </form>        
                                    <a href="{{ route('admin.role.edit',$role->id) }}" class="btn btn-outline-primary">Edit</a>
                                </td>
                            </tr>
                            <?php $i++; ?>

                            @endforeach @if($roles->count()==0)
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