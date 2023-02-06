<?php 

    session_start();
    include ('template/header.php');
    include ('template/sidebar_admin.php');

    if(isset($_POST["submit"])){
        if(tambahPetugas($_POST)>0){
          echo"
          <script>  
            alert('Data Berhasil Ditambahkan');
            document.location.href ='dataPetugas.php';
          </script>
          ";
    }else{
      echo "
          <script>  
            alert('Data Gagal Ditambahkan');
            document.location.href ='dataPetugas.php';
          </script>
          ";
        }
      }
      
    ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Petugas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card card-info ml-3 mr-4 ">
              <div class="card-header">
                <h3 class="card-title">Masukan Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_petugas" placeholder="Masukan Nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telepon" placeholder="Masukan No Telfon">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="level">
                          <option value="admin">Admin</option>
                          <option value="petugas">Petugas</option>
                    </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Tambah</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    <!-- /.content -->
  </div>


<?php include ('template/footer.php')?>