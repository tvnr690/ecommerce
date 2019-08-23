<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} {{ ucfirst(config('multiauth.prefix')) }}</title>

 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/puse-icons-feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('vendors/morris.js/morris.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

  <link rel="stylesheet" href="{{ asset('vendors/icheck/skins/all.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin.home') }}"></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule <span class="badge badge-primary ml-1">New</span></a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          @guest('admin')
          <li class="nav-item">
              <a class="nav-link" href="{{route('admin.login')}}">{{ ucfirst(config('multiauth.prefix')) }} Login</a>
          </li>
          @else          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="mr-3">{{ auth('admin')->user()->name }}</span><img class="img-xs rounded-circle" src="{{ asset('images/faces/face1.jpg') }}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                </div>
              </a>              
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item" href="{{ route('admin.password.change') }}">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                 {{ __('Sign Out') }}
              </a>
              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">           
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="{{ asset('images/faces/face1.jpg') }}" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">{{ auth('admin')->user()->name }}</p>
                <p class="designation">UI/UX Designer</p>
              </div>             
            </div>
          </li>
         
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.home') }}"> <img class="menu-icon" src="{{ asset('images/menu_icons/01.png') }}" alt="menu icon"> <span class="menu-title">Dashboard</span></a> </li>
          @admin('super')
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.roles') }}"> <img class="menu-icon" src="{{ asset('images/menu_icons/21.png') }}" alt="menu icon"> <span class="menu-title">Roles</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.show') }}"> <img class="menu-icon" src="{{ asset('images/menu_icons/22.png') }}" alt="menu icon"> <span class="menu-title">{{ ucfirst(config('multiauth.prefix')) }}</span></a> </li>
          @endadmin
          <li class="nav-item"> <a class="nav-link" href=""> <img class="menu-icon" src="{{ asset('images/menu_icons/25.png') }}" alt="menu icon"> <span class="menu-title">Products</span></a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category') }}"> <img class="menu-icon" src="{{ asset('images/menu_icons/24.png') }}" alt="menu icon"> <span class="menu-title">Category</span></a> </li>
          
          @endguest
        </ul>
      </nav>
      <!-- partial -->
      


      @section('main-content')
          
      @show


   

      <!-- main-panel ends -->
    </div>
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{ date('Y') }} <a href="" target="_blank">Venkat Reddy</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  



  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendors/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('vendors/morris.js/morris.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->

  <!-- Plugin js for this page-->
  <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/data-table.js') }}"></script>

  <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
  <script src="{{ asset('js/select2.js') }}"></script>

  {{-- <script src="{{ asset('vendors/icheck/icheck.min.js') }}"></script> --}}
  <script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('js/typeahead.js') }}"></script>


  
  @section('script')
          
  @show

 




</body>
</html>