@extends('multiauth::layouts.master')
@section('main-content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
                @include('multiauth::message')
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <h3 class="card-title mb-0">Category List</h3>
                  <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-success ml-auto"><i class="mdi mdi-plus"></i>New Category</a>
                </div>
                <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                          <th>Order #</th>
                          <th>Category</th>
                          <th>Category Slug</th>
                          {{-- <th>Email</th>      --}}
                          {{-- <th>Status</th> --}}
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                            <?php $i = 1; ?>
                            @foreach ($categories as $category)
                            <tr>                                
                                <td>{{ $i }}</td>
                                <td>{{ $category->cat_name }}</td>
                                <td>{{ $category->cat_slug }} </td>
                                {{-- <td>{{ $admin->email }}</td> --}}
                                {{-- <td><label class="badge badge-info {{ $admin->active? 'badge-info' : 'badge-danger' }}">{{ $admin->active? 'Active' : 'Inactive' }}</label></td> --}}
                                <td>
                                    <a href="" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $category->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $category->id }}" action="{{ route('admin.category.delete',$category->id) }}" method="POST" style="display: none;">
                                        @csrf @method('delete')
                                    </form>        
                                    <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-outline-primary">Edit</a>
                                </td>
                            </tr>
                            <?php $i++; ?>

                            @endforeach @if($categories->count()==0)
                            <tr>No Category created Yet.</tr>
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