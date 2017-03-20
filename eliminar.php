<?php


require 'funciones.php';

$codpreg = $_GET['id'];
deletePregunta($codpreg);
echo 'El registro se elimino con exito';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>Gestor de preguntas</title>
	    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>

    <body>
    	<p><a href="listapreguntas.php">Volver al listado de preguntas</a></p>
    </body>
</html>