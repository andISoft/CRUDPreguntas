<?php

require 'funciones.php';

function recogeDato($campo){
    return isset($_POST[$campo])? $_POST[$campo] : '';
} 

$pregunta    = recogeDato('pregunta');
$puntaje = recogeDato('puntaje');
$areapreg   = recogeDato('areapreg');

$algunerror = false;


if($pregunta == ''){ 
    $algunerror = true; 
    echo "<p class='error'>No has introducido tu pregunta</p>\n";
}
if($puntaje == ''){ 
    $algunerror = true;
    echo "<p class='error'>No has introducido tu puntaje.</p>\n";
}
if($areapreg == ''){ 
    $algunerror = true;
    echo "<p class='error'>No has introducido tu areapreg.</p>\n";
}

if ($algunerror){ 

    echo "<p>Por favor, vuelve a rellenar el formulario.</p>\n";
    echo "<p><a href='index.php'>Volver al formulario</a></p>\n";
    exit;
}else {

    $preg = array(
        'pregunta' => $pregunta,
        'puntaje' => $puntaje,
        'areapreg' => $areapreg,
        );

    if(isset($_POST['codigo']) && !empty($_POST['codigo'])){
        $preg['codigo'] = $_POST['codigo'];
        updatePregunta($preg);
    }else{
        insertPregunta($preg);
    }

}

?>

<html>
<head>
    <title>Gestor de preguntas</title>
</head>
<body>
<h1>Resumen de Registro</h1>
<p><strong>Pregunta:</strong></p> <?php echo $pregunta ?>
<p><strong>Puntaje:</strong></p> <?php echo $puntaje ?>
<p><strong>Area:</strong></p> <?php echo $areapreg ?>
<br>
<p><a href='registro.php'>Volver al registro</a></p>
<p><a href="listapreguntas.php">Ver listado de preguntas</a></p>
</body>
</html>