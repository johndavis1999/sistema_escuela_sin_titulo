<?php
include('../../../config/conexion.php');

$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM materias WHERE id= '".$idRegistros."' ");
//mysqli_query($conexion, $DeleteRegistro);
$cone = $conexion ->query($DeleteRegistro);
header("location: ../consultaMaterias.php");
?>