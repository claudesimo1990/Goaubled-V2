@extends('layouts.master')

@section('css')
<link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet" defer>
@stop

@section('content')


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav user--bg-gradient-background sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active mt-4">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <i class="fas fa-fw fa-home"></i>
          <span>Accueil</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages_1" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Expéditions en cours</span>
        </a>
        <div id="collapsePages_1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">test</h6>
            <a class="collapse-item" href="{{ route('users.index') }}">Utilisateurs</a>
            <a class="collapse-item" href="{{ route('admin.travels.index') }}">Travels</a>
            <a class="collapse-item" href="forgot-password.html">Packs</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Admins</h6>
            <a class="collapse-item" href="404.html">Administrateurs</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages_2" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Expéditions effectuées</span>
        </a>
        <div id="collapsePages_2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">test</h6>
            <a class="collapse-item" href="{{ route('users.index') }}">Utilisateurs</a>
            <a class="collapse-item" href="{{ route('admin.travels.index') }}">Travels</a>
            <a class="collapse-item" href="forgot-password.html">Packs</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Admins</h6>
            <a class="collapse-item" href="404.html">Administrateurs</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-comments"></i>
          <span>Chat</span></a>
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between my-4">
            <h2 class="h3 mb-0 text-gray-800">@yield('dashboard_title')</h2>
          </div>

        <!-- Content Row -->
          @yield('dashbord_content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
@endsection