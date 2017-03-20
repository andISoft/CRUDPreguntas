<?php

require 'conexion.php';

function getAreaPregunta() {

    $conexion = conexion();
    $select = "select * from Area_Preg";
    $query = mysqli_query($conexion, $select);
        
    $areapreg = array();

    while($row = mysqli_fetch_assoc($query)) {
        $areapreg[] = $row;
    }

    return $areapreg;
}

function insertPregunta($pregunta) {

    //$Preg_cod = (int)$pregunta['codigo'];
    $Preg_text = $pregunta['pregunta'];
    $Preg_puntaje = $pregunta['puntaje'];
    $Area_Preg_AP_Cod = $pregunta['areapreg'];
    $conexion = conexion();
    $insert = "INSERT INTO Pregunta (Preg_cod, Preg_text, 
        Preg_puntaje, Area_Preg_AP_Cod)
    VALUES ('', '$Preg_text', '$Preg_puntaje', '$Area_Preg_AP_Cod')";
    $consulta_nm = mysqli_query($conexion, $insert) 
    or die('error en la consulta' . mysql_error());
}


function getPreguntas(){

    $conexion = conexion();
    $select = "SELECT preg.Preg_cod as codigo, preg.Preg_text as texto, preg.Preg_puntaje as puntaje,
     ar.AP_Descripcion as area
    from Pregunta as preg, Area_Preg as ar
    where preg.Area_Preg_AP_Cod = ar.AP_Cod";
    $query = mysqli_query($conexion, $select) 
    or die('error en la consulta'.mysqli_connect_error());
    $preguntas = array();
    while($row = mysqli_fetch_assoc($query)) {
        $preguntas[] = $row;
    }

    return $preguntas;
}

function getPreguntaporcod($codpreg){

    $conexion = conexion();
    $select = "SELECT * FROM Pregunta
                WHERE Preg_cod = $codpreg";

    $query = mysqli_query($conexion,$select);
    $pregunta = mysqli_fetch_assoc($query);

    return $pregunta;
}

function updatePregunta($preg){

    $Preg_cod = $preg['codigo'];
    $Preg_text = $preg['pregunta'];
    $Preg_puntaje = $preg['puntaje'];
    $Area_Preg_AP_Cod = $preg['areapreg'];
    $conexion = conexion();
    $update = "Update Pregunta set Preg_text='$Preg_text',
        Preg_puntaje='$Preg_puntaje',
        Area_Preg_AP_Cod='$Area_Preg_AP_Cod'
        where Preg_cod = $Preg_cod";
    $query = mysqli_query($conexion, $update)
    or die ('error en la consulta'.mysqli_connect_error());

}


function deletePregunta($codpreg) {

    $conexion = conexion();
    $delete = "Delete from Pregunta where Preg_cod = $codpreg";
    $query = mysqli_query($conexion, $delete) 
    or die('error en la consulta' . mysqli_connect_error());
}


function getResultados(){

    $conexion = conexion();
    $select = "SELECT * from ResultadosEncuesta";
    $query = mysqli_query($conexion, $select) 
    or die('error en la consulta'.mysqli_connect_error());
    $preguntas = array();
    while($row = mysqli_fetch_assoc($query)) {
        $resultado[] = $row;
    }

    return $resultado;
}