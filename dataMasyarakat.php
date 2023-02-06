<?php 
session_start();
    include ('template/header.php');
    include ('template/sidebar_admin.php');


    $masyarakat =query("SELECT * FROM masyarakat");

    ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Masyarakat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Masyarakat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <a href="addMasyarakat.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="data-table table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Telfon</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach ($masyarakat as $row):?>
                      <tr>
                    <td><?=$i;?></td>
                    <td><?=$row["nik"];?></td>
                    <td><?=$row["nama"];?></td>
                    <td><?=$row["username"];?></td>
                    <td><?=$row["password"];?></td>
                    <td><?=$row["telp"];?></td>
                    <td><?=$row["level"];?></td>
                    <td><a href="hapusMasyarakat.php?id=<?=$row["id_masyarakat"];?>"><button class="btn btn-danger">Hapus</button></a></td>
                  </tr>
                  <?php $i++;?>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<?php include ('template/footer.php')?>