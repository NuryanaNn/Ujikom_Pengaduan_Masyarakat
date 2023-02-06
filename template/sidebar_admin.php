
<?php

include 'function.php';

$proPeg=mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$_SESSION[id_petugas]'");
$profile=mysqli_fetch_array($proPeg);



?>



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="Vendor/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$profile['username'];?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
            <li class="nav-item">
              <a href="dataPetugas.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Petugas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dataMasyarakat.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Masyarakat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>Laporan</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-location-arrow"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
        
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  
