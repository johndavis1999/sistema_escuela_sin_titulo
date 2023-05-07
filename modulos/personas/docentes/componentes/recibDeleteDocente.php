<?php
// llama la conexión a la base de datos
include('../../../../config/conexion.php');
// Recibir el ID del libro a eliminar
$idRegistros = $_REQUEST['id'];
// Crear la consulta SQL para eliminar el libro con el ID especificado
$DeleteRegistro = ("DELETE FROM docente WHERE id= '".$idRegistros."' ");
// Ejecutar la consulta
$cone = $conexion ->query($DeleteRegistro);
// Redirigir al usuario a la página de docentes
header("location: ../consultaDocentes.php");
?>