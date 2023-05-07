<?php
include('../../../../config/conexion.php');
$idcurso      = $_REQUEST['idcurso'];
$idalumno 	 = $_REQUEST['idalumno'];
$insertAlumno = "insert into lista_alumnos( idcurso, idalumno) 
    values('{$idcurso}','{$idalumno}')";
$cone = $conexion ->query($insertAlumno);
header("location: verCurso.php?id=$idcurso");
?>