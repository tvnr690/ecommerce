@extends('multiauth::layouts.master') 
@section('main-content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-cube text-success icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Revenue</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$65,650</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-briefcase-check text-primary icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Orders</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$45,650</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-account-multiple text-danger icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Returns</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$12,357</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-airballoon text-info icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Sales</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$45,650</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Order Status</h5>
                  <div class="row mb-5">
                    <div class="col-md-3 col-sm-6 col-6">
                      <div class="d-flex">
                        <h2 class="mb-0">5675</h2>
                        <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                      </div>
                      <p>Daily Order</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <div class="d-flex">
                        <h2 class="mb-0">7841</h2>
                        <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                      </div>
                      <p>Tasks Completed</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <div class="d-flex">
                        <h2 class="mb-0">6521</h2>
                        <i class="mdi mdi-arrow-down h2 mb-0 text-danger"></i>
                      </div>
                      <p>Monthly Sales</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <div class="d-flex">
                        <h2 class="mb-0">8954</h2>
                        <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                      </div>
                      <p>Total Revenue</p>
                    </div>
                  </div>
                  <canvas id="dashoard-area-chart" height="70"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Payment Method</h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr>
                          <th class="border-bottom-0">ID</th>
                          <th class="border-bottom-0">Assignee</th>
                          <th class="border-bottom-0">Task Details</th>
                          <th class="border-bottom-0">Payment Method</th>
                          <th class="border-bottom-0">Payment Status</th>
                          <th class="border-bottom-0">Amount</th>
                          <th class="border-bottom-0">Tracking Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#320</td>
                          <td>Mark C.Diaz</td>
                          <td>Support of thteme</td>
                          <td>Credit card</td>
                          <td><label class="badge badge-success">Approved</label></td>
                          <td>$12,245</td>
                          <td>JPBBN435893458</td>
                        </tr>
                        <tr>
                          <td>#321</td>
                          <td>Jose D</td>
                          <td>Verify your email address !</td>
                          <td>Internet banking</td>
                          <td><label class="badge badge-warning">Pending</label></td>
                          <td>$12,245</td>
                          <td>BDYBN435893325</td>
                        </tr>
                        <tr>
                          <td>#322</td>
                          <td>Philips T</td>
                          <td>Item support message send</td>
                          <td>Credit card</td>
                          <td><label class="badge badge-success">Approved</label></td>
                          <td>$12,245</td>
                          <td>JSNTN435884258</td>
                        </tr>
                        <tr>
                          <td>#323</td>
                          <td>Luke Pixel</td>
                          <td>New submission on website</td>
                          <td>Cash on delivery</td>
                          <td><label class="badge badge-danger">Rejected</label></td>
                          <td>$12,245</td>
                          <td>JPABT435893678</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center mt-4">
                    <p class="mb-0 d-none d-md-block text-dark">Showing 1 to 20 of 20 entries</p>
                    <ul class="pagination mb-0 ml-auto">
                      <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
    
    
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>

                <div class="card-body">
                @include('multiauth::message')
                     You are logged in to {{ config('multiauth.prefix') }} side!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection