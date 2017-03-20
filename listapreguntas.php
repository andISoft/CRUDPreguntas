<?php
require 'funciones.php';
$preguntas = getPreguntas();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestor de preguntas</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div>
    <h1>Listado de preguntas</h1>
    <table class="table">

        <thead>
        <tr>
            <th>Codigo</th>
            <th>Pregunta</th>
            <th>Puntaje</th>
            <th>Area</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($preguntas as $pregunta):?>
            <tr>
                <td><?php echo $pregunta['codigo']?></td>
                <td><?php echo $pregunta['texto']?></td>
                <td><?php echo $pregunta['puntaje']?></td>
                <td><?php echo $pregunta['area']?></td>
                <td><a href="editar.php?id=<?php echo $pregunta['codigo']?>">editar</a></td>
                <td><a href="eliminar.php?id=<?php echo $pregunta['codigo']?>">eliminar</a></td>

            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <p><a href="registro.php">Registrar otra pregunta</a></p>
</div>

</body>
</html>
