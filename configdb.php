<?php
	@session_start();
	$_SESSION['judul'] = 'CV. UTOMO JAYA MANDIRI';
	$_SESSION['welcome'] = 'SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KARYAWAN TERBAIK PADA CV. UTOMO JAYA MANDIRI';
	$_SESSION['by'] = 'CV.UTOMO JAYA MANDIRI, Indonesia Copyright 2020';
	$mysqli = new mysqli('localhost','root','','cvutomo');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>