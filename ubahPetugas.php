<?php 
session_start();
    include ('template/header.php');
    include ('template/sidebar_admin.php');
    
    $id =$_GET["id"];
    $petugas = query("SELECT * FROM petugas WHERE id_petugas=$id")[0];
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Data Petugas</h1>
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
                <h3 class="card-title">Ubah Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="cekUbahPetugas.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <input type ="hidden" name="id_petugas" value="<?=$petugas["id_petugas"];?>">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_petugas" placeholder="Masukan Nama" value="<?=$petugas["nama_petugas"]?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" placeholder="Masukan Username" value="<?=$petugas["username"]?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="password" placeholder="Password" value="<?=$petugas["password"]?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telepon" placeholder="Masukan No Telfon" value="<?=$petugas["telp"]?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="levels" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="level" value="<?=$petugas["level"]?>">
                          <option value="admin">Admin</option>
                          <option value="petugas">Petugas</option>
                    </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-info">Tambah</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    <!-- /.content -->
  </div>


<?php include ('template/footer.php')?>