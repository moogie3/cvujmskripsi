<?php
	session_start();
	if (isset($_SESSION['login']))
		header('Location: dashboard.php');
	include 'lhast.php'; 
	include 'configdb.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
	  <link rel="stylesheet" href="ui/css/style.css">
	  <link rel="stylesheet" href="ui/css/plugins.css">
	  <link rel="stylesheet" href="ui/css/responsive.css" />
	  <link rel="stylesheet" href="assets/css/plugins.css" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- Custom styles for this template -->
    <link href="ui/css/signin.css" rel="stylesheet">
	<script src="ui/js/es6-promise.auto.min.js"></script> <!-- IE support -->
	<script src="ui/js/sweetalert2.js"></script>
	<link rel="stylesheet" href="ui/css/sweetalert2.min.css">
	
	<!-- jQuery 2.2.0 -->
	<script src="ui/js/jQuery-2.2.0.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="ui/js/bootstrap.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div class="preloader">
                    <div class="loaded hexdots-loader">Loading…</div>
                </div><!-- End off Preloader -->
<div class="container">
      <form class="form-signin" method="post" target="_self">
        <center><h2 class="form-signin-heading">LOGIN</h2></center>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="user" id="user" class="form-control" placeholder="Username" required autofocus>
		<br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
		<br/>
        <button class="btn btn-md btn-primary btn-block" type="submit">Login</button>
      </form>
</div>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_POST && $_POST['user']!='' && $_POST['pass']!=''){
			$result = $mysqli->query("select * from user WHERE user = '".$_POST['user']."' and pass = '".$_POST['pass']."'");
			if(@$result->num_rows != 0){
				while ($row = $result->fetch_assoc()) {
					$_SESSION['login'] = 'KJHAbkfase86234809701234hgvbKHJGVYH%$&^$%&$^*';
					$_SESSION['user'] = $row['user'];
					$_SESSION['pass'] = $row['pass'];
					$_SESSION['level'] = $row['level'];
				}
				header('Location: dashboard.php');
			}
			else { ?>
				<script>
				  swal({
					  title: 'Login Error!',
					  text: 'Maaf Username atau Password salah..',
					  type: 'error',
					  confirmButtonText: 'OK'
				  })
				</script>
	<?php	}
		}
		if(@$_POST['user']=='')
			echo " username harus diisi..";
		if(@$_POST['pass']=='')
			echo " password harus diisi..";
	}
?>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
        <script src="assets/js/main.js"></script>
</html>
