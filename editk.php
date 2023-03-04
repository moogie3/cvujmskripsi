<?php
	session_start();
	if (!isset($_SESSION['login']))
		header('Location: index.php');
	include('configdb.php');
?>
<?php
	$alternatif = $_POST['alternatif'];
	$jabatan = $_POST['jabatan']; 
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp'];
	
	$result = $mysqli->query("UPDATE alternatif SET `alternatif` = '".$alternatif."', `jabatan` = '".$jabatan."',`alamat` = '".$alamat."',`hp` = '".$hp."' WHERE `id_alternatif` = ".$_GET['id'].";");
	if(!$result==""){
		header('Location: karyawan.php');
	}
	else{?>
<script language="JavaScript">alert('Data Sudah Ada'); 
document.location='karyawan.php'</script>
	}
<?php
	}
?>