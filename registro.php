<?php
    require 'funciones.php';
    $areaPregunta=getAreaPregunta();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestor de preguntas</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<h1>Registro de preguntas</h1>
<div id="formulario">

    <form method="post" action="post.php" style="margin-left:10px">
        <br>
        <div>
            <strong>Pregunta:</strong>
            <input type="text" name="pregunta" size="50" value="">
        </div>
        <br>
        <div>
            <strong>Puntaje:</strong>
            <input type="text" name="puntaje" value="">
        </div>
        <br>
        <div>
            <strong>Area de Pregunta:</strong>
            <select name="areapreg">
                <?php foreach($areaPregunta as $area): ?>
                <option value="<?php echo $area['AP_Cod']?>">
                    <?php echo $area['AP_Descripcion']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <button>Guardar</button>
    </form>

    <p><a href="listapreguntas.php">Ver registro de preguntas</a></p>
    <p><a href="listaresultados.php">Ver registro de resultados</a></p>
    <p><a href="index.php">Salir</a></p>
</div>


</body>
</html>
		