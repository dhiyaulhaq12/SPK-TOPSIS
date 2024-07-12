<link href="assets\img\logo T.jpg" rel="icon">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-car"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Tumbas Mobil</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
<li class="nav-item">
    <a class="nav-link" href="{{ route('alternatif')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Alternatif</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('kriteria')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Kriteria</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>

  <!-- <li class="nav-item">
    <a class="nav-link" href="{{ route('SubKriteria')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Sub Kriteria</span></a>
  </li> -->

  <li class="nav-item">
    <a class="nav-link" href="{{ route('penilaian.index')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Penilaian</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('calculate.topsis')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Calculate</span></a>
  </li>


  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>