<?php
include('../../../config/conexion.php');

$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM curso WHERE id= '".$idRegistros."' ");
//mysqli_query($conexion, $DeleteRegistro);
$cone = $conexion ->query($DeleteRegistro);
header("location: ../consultacursos.php");
?>