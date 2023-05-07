<?php
include('../../../config/conexion.php');

$idgrado      = $_REQUEST['idgrado'];
$idparalelo 	 = $_REQUEST['idparalelo'];
$iddocente      = $_REQUEST['iddocente'];


$inserCurso = "insert into curso( idgrado, idparalelo, iddocente) 
    values('{$idgrado}','{$idparalelo}','{$iddocente}')";
//echo $inserLibro;
$cone = $conexion ->query($inserCurso);
header("location: ../consultacursos.php");


?>
