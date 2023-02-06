<?php
require 'function.php';

$id = $_GET["id"];
if(hapusMasyarakat($id)>0){
		echo "
				<script>  
					alert('Data Berhasil DiHapus');
					document.location.href ='dataMasyarakat.php';
				</script>
				";
	}else{
	echo "
					<script>  
					alert('Data Gagal DiHapus');
					document.location.href ='dataMasyarakat.php';
				</script>
				";
	}


?>