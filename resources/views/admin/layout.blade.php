<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Goaubled-Admin</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav admin--bg-gradient-background sidebar sidebar-dark accordion pl-4" id="accordionSidebar">

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <h5 class="font-weight-bold">Goaubled <b> Admin</b> </h5></a>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('images.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Header</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Users</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.travels.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Travels</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.colis.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Packs</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('images.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Admins</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('images.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Administrateurs</span></a>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user() ? auth()->user()->name : ''  }}</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('admin_title')</h1>
          </div>

          @yield('stats')

          <!-- Content Row -->

        <div id="app">
            @yield('admin_content')
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
