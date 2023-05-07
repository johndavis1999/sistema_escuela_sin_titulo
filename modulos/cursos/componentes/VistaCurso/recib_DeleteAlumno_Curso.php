<?php
include('../../../../config/conexion.php');

$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM lista_alumnos WHERE id= '".$idRegistros."' ");
//mysqli_query($conexion, $DeleteRegistro);
$cone = $conexion ->query($DeleteRegistro);
header("Refresh:0");
?>