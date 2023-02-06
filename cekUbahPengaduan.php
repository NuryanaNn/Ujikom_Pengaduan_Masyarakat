<?php 
 
include 'function.php';
$id = $_POST['id_pengaduan'];
$tanggal = $_POST['tanggal'];
$nik = $_POST['nik'];
$isi = $_POST['isi'];
$status = $_POST['status'];
$gambarLama = $_POST['gambarLama'];

//cek apa usere pilih gambar baru atau tidak
if($_FILES['gambar']['error']===4){
    $gambar = $gambarLama;
}else{
    $gambar = upload();	
}


$result =mysqli_query($koneksi, "UPDATE pengaduan SET tgl_pengaduan='$tanggal', 
                                                    nik='$nik', 
                                                    isi_laporan='$isi', 
                                                    foto='$gambar', 
                                                    status='$status'
                                                    WHERE id_pengaduan='$id'");

header("location:pengaduan.php?pesan=berhasil");
 
?>