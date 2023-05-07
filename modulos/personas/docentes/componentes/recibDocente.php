<?php
// llama la conexión a la base de datos
include('../../../../config/conexion.php');
// Recibir los datos del formulario
$nombres      = $_REQUEST['nombres'];
$apellidos      = $_REQUEST['apellidos'];
$identificacion      = $_REQUEST['identificacion'];
$es_extranjero      = $_REQUEST['es_extranjero'];
$direccion      = $_REQUEST['direccion'];
$fecha_nacimiento      = $_REQUEST['fecha_nacimiento'];
$celular      = $_REQUEST['celular'];
$correo      = $_REQUEST['correo'];
$idsexo      = $_REQUEST['idsexo'];

// Crear la consulta SQL para insertar los datos del libro en la tabla "alumnos"
$insertEstudiante = "insert into docente( nombres, apellidos, identificacion, 
es_extranjero, direccion, fecha_nacimiento, celular, correo, idsexo) 
    values('{$nombres}','{$apellidos}','{$identificacion}','{$es_extranjero}','{$direccion}','{$fecha_nacimiento}','{$celular}','{$correo}','{$idsexo}')";
$cone = $conexion ->query($insertEstudiante);
// Redirigir al usuario a la página de libros
header("location: ../consultaDocentes.php");
?>