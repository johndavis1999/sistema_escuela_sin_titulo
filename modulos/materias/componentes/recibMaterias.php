<?php
include('../../../config/conexion.php');

$codigo      = $_REQUEST['codigo'];
$nombre 	 = $_REQUEST['nombre'];
$iddocente      = $_REQUEST['iddocente'];


$inserMateria = "insert into materias( codigo, nombre, iddocente) 
    values('{$codigo}','{$nombre}','{$iddocente}')";
//echo $inserLibro;
$cone = $conexion ->query($inserMateria);
header("location: ../consultaMaterias.php");


?>
