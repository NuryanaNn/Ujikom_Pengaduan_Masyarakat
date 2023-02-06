<?php

$koneksi = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");

// Cek Koneksi
if(mysqli_connect_errno()){
    echo "koneksi database gagal :" . mysqli_connect_error();
}


function query($query){
	global $koneksi;
	$result = mysqli_query ($koneksi, $query);
	$rows =[];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}


// Tambah Data Petugas
function tambahPetugas($data){
	global $koneksi;
	$nama_petugas=htmlspecialchars($data["nama_petugas"]);
	$username=htmlspecialchars($data["username"]);
	$password=htmlspecialchars($data["password"]);
	$telepon=htmlspecialchars($data["telepon"]);
	$level=htmlspecialchars($data["level"]);

	$query="INSERT INTO petugas
			VALUE
			('','$nama_petugas','$username','$password','$telepon','$level')
			";

			mysqli_query($koneksi, $query);
			return mysqli_affected_rows($koneksi);
}

function tambahMasyarakat($data){
	global $koneksi;
	$nik=htmlspecialchars($data["nik"]);
	$nama_masyarakat=htmlspecialchars($data["nama"]);
	$username=htmlspecialchars($data["username"]);
	$password=htmlspecialchars($data["password"]);
	$telepon=htmlspecialchars($data["telepon"]);
	$level=htmlspecialchars($data["level"]);

	$query="INSERT INTO masyarakat
			VALUE
			('','$nik','$nama_masyarakat','$username','$password','$telepon','$level')
			";

			mysqli_query($koneksi, $query);
			return mysqli_affected_rows($koneksi);
}

function tambahPengaduan($data){
	global $koneksi;
	$tanggal=htmlspecialchars($data["tanggal"]);
	$nik=htmlspecialchars($data["nik"]);
	$isi=htmlspecialchars($data["isi"]);
	$status=htmlspecialchars($data["status"]);

	$gambar = upload();
	if( !$gambar){
		return false;
	}

	$query="INSERT INTO pengaduan
			VALUE
			('','$tanggal','$nik','$isi','$gambar','$status')
			";

			mysqli_query($koneksi, $query);
			return mysqli_affected_rows($koneksi);
}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile =$_FILES ['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	
	if($error === 4){
		echo "<script>
				alert('Pilih Gambar Dulu');
			  </script>";
			  return false;
	}

	//cek gambar atau bukan
	$ekstensiGambarValid =['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
				alert('Yang Anda Upload Bukan Gambar');
			    </script>";
			    return false;

	}

	if($ukuranFile > 10000000){

	}

	$namaFileBaru = uniqid();
	$namaFileBaru.= '.';
	$namaFileBaru.= $ekstensiGambar;
	move_uploaded_file($tmpName, 'assets/img/'.$namaFileBaru);
	return $namaFileBaru;
}

// Hapus Petugas
function hapusPetugas($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas=$id" );

	return mysqli_affected_rows($koneksi);
}


// Hapus Petugas
function hapusMasyarakat($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM masyarakat WHERE id_masyarakat=$id" );

	return mysqli_affected_rows($koneksi);
}

// Hapus Petugas
function hapusPengaduan($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan=$id" );

	return mysqli_affected_rows($koneksi);
}








?>