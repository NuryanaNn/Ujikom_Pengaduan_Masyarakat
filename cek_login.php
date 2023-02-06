<?php 
session_start();

include 'function.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

// Cek apakah username dan password ditemukan
if($cek > 0){
    $data =mysqli_fetch_assoc($login);

    // Cek Hak akses
    if($data['level']=="admin"){
        $_SESSION['username']=$username;
        $_SESSION['level']="admin";
        $_SESSION['id_petugas'] = $data['id_petugas'];

        // mengarahkan halaman
        header("location:dashboard.php");

        // Ini untuk hak akses pertugas
    }else if($data['level']=="petugas"){
        $_SESSION['username']=$username;
        $_SESSION['level']="petugas";
        // Ini untuk mengarahkan ke halaman petugas
        header("location:halaman_petugas.php");
}else{
    header("location:index.php?pesan=gagal");
}
}else{
    header("location:index.php?pesan=gagal");
}



$masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");

$ambilData = mysqli_num_rows($masyarakat);


// Cek apakah username dan password ditemukan
if($ambilData > 0){
    $data =mysqli_fetch_assoc($masyarakat);

    // Cek Hak akses
    if($data['level']=="masyarakat"){
        $_SESSION['username']=$username;
        $_SESSION['level']="masyarakat";
        
        $_SESSION['nik'] = $data['nik'];
        // Ini untuk mengarahkan ke halaman petugas
        header("location:halaman_masyarakat.php");
}else{
    header("location:index.php?pesan=gagal");
}
}







?>