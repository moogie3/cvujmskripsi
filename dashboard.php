<?php
	session_start();
	if (!isset($_SESSION['login']))
		header('Location: index.php');
	include('configdb.php');
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="ui/foto/logo.png">

    <title>SPK CV. UTOMO JAYA MANDIRI</title>
	
    <!-- Bootstrap core CSS -->
	<link href="ui/css/materia.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="./index_files/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
<!--
.style1 {font-family: Times New Roman}
-->
    </style>
    </head>
  
  <body>
	<div class="container">

      <!-- Static navbar -->
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>            </button>
            <a class="navbar-brand" href="#">CV. UTOMO JAYA MANDIRI</a>          
			</div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
		      <li class="active"><a href="dashboard.php">Home</a></li>
              <?php if($_SESSION['level'] =='admin'){ ?><li><a href="kriteria.php">Data Kriteria</a></li><?php } ?>
			  <?php if($_SESSION['level'] =='admin'){ ?><li><a href="karyawan.php">Data Karyawan</a></li><?php } ?>
              <?php if($_SESSION['level'] =='admin'){ ?><li><a href="alternatif.php">Penilaian</a></li><?php } ?>	
			  <li><a href="analisa.php">Analisa</a></li>
              <li><a href="perhitungan.php">Perhitungan</a></li>
              <li><a href="profile.php">Profile</a></li>
			  <li><a href="logout.php">Logout</a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
		<ol class="breadcrumb">
		  <li class="active">Home</li>
		</ol>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-body">
			<h1><p align="center" class="text-primary style1" >SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KARYAWAN TERBAIK PADA CV. UTOMO JAYA MANDIRI</p>
			</h1>
			<a href="ui/foto/Toko 2.jpeg" class="center"><img src="ui/foto/Toko 2.jpeg" alt="" width="1110"></a>
	    </div>

		  <!-- Table -->
		  <table class="table">
		  </table>
		  <div class="panel-footer"><?php echo $_SESSION['by'];?><div class="pull-right"></div></div>
		</div>

    </div> <!-- /container -->



</body></html>