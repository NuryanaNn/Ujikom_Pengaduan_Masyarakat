<?php 
 
include 'function.php';
$id = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telepon = $_POST['telepon'];
$level = $_POST['level'];
 
$result =mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas', 
                                                    username='$username', 
                                                    password='$password', 
                                                    telp='$telepon', 
                                                    level='$level'
                                                    WHERE id_petugas='$id'");
header("location:dataPetugas.php?pesan=berhasil");
 
?>