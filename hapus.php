<?php
require 'function.php';

$id = $_GET["id"];
if(hapusPetugas($id)>0){
		echo "
				<script>  
					alert('Data Berhasil DiHapus');
					document.location.href ='dataPetugas.php';
				</script>
				";
	}else{
	echo "
					<script>  
					alert('Data Gagal DiHapus');
					document.location.href ='dataPetugas.php';
				</script>
				";
	}

	


?>