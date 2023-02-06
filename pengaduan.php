<?php 
session_start();
    include ('template/header.php');
    include ('template/sidebar_masyarakat.php');
    include 'function.php';

  
    $pengaduan =query("SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]'");

    ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengaduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengaduan</li>
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
              <a href="addPengaduan.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="data-table table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Pengaudan</th>
                    <th>Nik</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach ($pengaduan as $row):?>
                      <tr>
                    <td><?=$i;?></td>
                    <td><?=$row["tgl_pengaduan"];?></td>
                    <td><?=$row["nik"];?></td>
                    <td><?=$row["isi_laporan"];?></td>
                    <td><img src="assets/img/<?=$row["foto"];?>" width="50px" height="50px"></td>
                    <td><?=$row["status"];?></td>
                    <td>
                      <a href="ubahPengaduan.php?id=<?=$row["id_pengaduan"];?>"><button class="btn btn-primary">Edit</button></a>
                      <a href="hapusPengaduan.php?id=<?=$row["id_pengaduan"];?>"><button class="btn btn-danger">Hapus</button></a>
                    </td>
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