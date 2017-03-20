<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
		<div class="page-header text-center">
		  <h1>Iniciar Sesion</h1>
		</div>
			<form class="form-signin" method="post" action="manejador.php">
	        <label for="user" class="sr-only">User</label>
	        <input type="text" name="user" class="form-control" placeholder="Usuario" required autofocus>
	        <label for="password" class="sr-only">Password</label>
	        <input type="password" name="password" class="form-control" placeholder="Contraseña" required> 
	        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
	      </form>
		</div>
	</div>	
</div>
</body>
</html>