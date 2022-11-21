<?php

include '../config/conexion.php';

    $id_profesor = $_POST['id_profesor'];
    $id_estudiante = $_POST['id_estudiante'];
    $asistencia = $_POST['asistencia'];
    $hora_de_entrada = $_POST['hora_de_entrada'];
    $hora_de_salida = $_POST['hora_de_salida'];
    $porcentaje = $_POST['porcentaje'];
    $observaciones = $_POST['observaciones'];
        
    $consulta = "insert into lista_asist values ('".$id_profesor."','".$id_estudiante."','".$asistencia."',
                                                 '".$hora_de_entrada."','".$hora_de_salida."','".$porcentaje."','".$observaciones."')";
    mysqli_query($conexion,$consulta) or die (mysqli_error());
    mysqli_close($conexion);
 
?>