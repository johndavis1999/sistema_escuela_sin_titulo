<?php
// llama la conexión a la base de datos
include('../../../../config/conexion.php');
// Recibir el ID del alumno a eliminar
$idRegistros = $_REQUEST['id'];
// Crear la consulta SQL para eliminar el alumno con el ID especificado
$DeleteRegistro = ("DELETE FROM alumnos WHERE id= '".$idRegistros."' ");
// Ejecutar la consulta
$cone = $conexion ->query($DeleteRegistro);
// Redirigir al usuario a la página de alumnoss
header("location: ../consultaAlumnos.php");
?>