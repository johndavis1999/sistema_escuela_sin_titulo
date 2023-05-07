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
$idrepresentante      = $_REQUEST['idrepresentante'];
// Crear la consulta SQL para insertar los datos del alumnos en la tabla "alumnos"
$insertEstudiante = "insert into alumnos( Nombres, Apellidos, identificacion, 
es_extranjero, direccion, fecha_nacimiento, celular, correo, idsexo, idrepresentante) 
    values('{$nombres}','{$apellidos}','{$identificacion}','{$es_extranjero}','{$direccion}','{$fecha_nacimiento}','{$celular}','{$correo}','{$idsexo}','{$idrepresentante}')";
$cone = $conexion ->query($insertEstudiante);
// Redirigir al usuario a la página de consulta de alumnos
header("location: ../consultaAlumnos.php");
?>