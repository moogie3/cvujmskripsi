<?php
	session_start();
	if (!isset($_SESSION['login']))
		header('Location: index.php');
?>
<?php
	include('configdb.php');
	$alternatif = $_POST['alternatif'];
	$jabatan = $_POST['jabatan']; 
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp'];
	
	$result = $mysqli->query("INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `jabatan`, `alamat`, `hp`) 
								VALUES (NULL, '".$alternatif."', '".$jabatan."', '".$alamat."', '".$hp."');");
	if(!$result==""){
		header('Location: karyawan.php');
	}
	else{
	?>
		<script language="JavaScript">alert('Data Sudah Ada'); 
document.location='karyawan.php'</script>
	}

<?php
}
?>