<?php
require 'function.php';

$id = $_GET["id"];
if(hapusPengaduan($id)>0){
		echo "
				<script>  
					alert('Data Berhasil DiHapus');
					document.location.href ='pengaduan.php';
				</script>
				";
	}else{
	echo "
					<script>  
					alert('Data Gagal DiHapus');
					document.location.href ='pengaduan.php';
				</script>
				";
	}


?>