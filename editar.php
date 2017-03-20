<?php
require 'funciones.php';
$codpreg = $_GET['id'];
$pregunta = getPreguntaporcod($codpreg);
$areaPregunta = getAreaPregunta();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestor de preguntas</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<h1>Actualizar Pregunta</h1>
<div id="formulario">

    <form method="post" action="post.php" style="margin-left:10px">
        <input type="hidden" value="<?php echo isset($pregunta['Preg_cod']) ? $pregunta['Preg_cod'] : ''?>" name="codigo">
        <div>
            <strong>Pregunta:</strong>
            <input type="text" name="pregunta" size="50" value="<?php echo isset($pregunta['Preg_text']) ? $pregunta['Preg_text'] : ''?>">
        </div>
        <br>
        <div>
            <strong>Puntaje:</strong>
            <input type="text" name="puntaje" value="<?php echo isset($pregunta['Preg_puntaje']) ? $pregunta['Preg_puntaje'] : ''?>">
        </div>
        <br>
        <div>
            <strong>Area:</strong>
            <select name="areapreg">
                <?php foreach($areaPregunta as $area): ?>
                    <option value="<?php echo $area['AP_Cod']?>"
                        <?php echo $pregunta['Area_Preg_AP_Cod'] == $area['AP_Cod'] ? 'selected' : ''?>
                    >
                        <?php echo $area['AP_Descripcion']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <button>Guardar</button>
    </form>
</div>

</body>
</html>
