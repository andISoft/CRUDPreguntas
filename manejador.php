<?php 
//session_start();

if (isset($_POST['submit'])) {
	$username = "admin";
	$password = "admin";
	if ( (isset($_POST['nombre'])) || (isset($_POST['password']) ) ){
		
		$nombre = $_POST['user'];
		$pass = $_POST['password'];

		if (($nombre == $username) && ($pass == $password)) {			
			$_SESSION['username'] = $nombre;
			header("location: registro.php");

		}else{
			header("location: index.php");
		}



	}else{
		header("location: index.php");
	}

}else{
	header("location: index.php");
}



 ?>