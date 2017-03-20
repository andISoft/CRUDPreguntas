<?php
require 'funciones.php';
$resultados = getResultados();
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
    <h1>Listado de resultados</h1>
    <table class="table">

        <thead>
        <tr>
            <th>Codigo</th>
            <th>Usuario</th>
            <th>Puntaje</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultados as $resultado):?>
            <tr>
                <td><?php echo $resultado['Cod_Resultado']?></td>
                <td><?php echo $resultado['Usuario_cod']?></td>
                <td><?php echo $resultado['Puntaje_Result']?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <p><a href="registro.php">Ir a registro</a></p>
</div>

</body>
</html>
