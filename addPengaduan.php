<?php 

    session_start();
    include ('template/header.php');
    include ('template/sidebar_masyarakat.php');
    include 'function.php';

    if(isset($_POST["submit"])){
        if(tambahPengaduan($_POST)>0){
          echo"
          <script>  
            alert('Data Berhasil Ditambahkan');
            document.location.href ='pengaduan.php';
          </script>
          ";
    }else{
      echo "
          <script>  
            alert('Data Gagal Ditambahkan');
            document.location.href ='pengaduan.php';
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
            <h1>Tambah Data Pengaduan</h1>
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

    <div class="card card-info ml-3 mr-4 ">
              <div class="card-header">
                <h3 class="card-title">Masukan Data Pengaduan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Tgl Pengaduan</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Pengaduan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Nik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nik" placeholder="Masukan Username" value="<?=$_SESSION['nik']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Isi Laporan</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" name="isi" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputFile" class="col-sm-2 col-form-label">File input</label>
                    <div class="custom-file col-sm-10">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="level" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="status">
                          <option value="menunggu">Menunggu</option>
                          <option value="proses">Proses</option>
                          <option value="selesai">Selesai</option>
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