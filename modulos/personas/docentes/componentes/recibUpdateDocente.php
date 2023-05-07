<?php
// Iniciar conexión a la base de datos
  include('../../../../config/conexion.php');
// Obtener los datos enviados a través de la formulario de actualización

// Verificar si la variable "id" está definida
if (isset($_POST["id"])) {
  $idRegistros = $_POST["id"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $idRegistros = "";
}
// Verificar si la variable "nombres" está definida
if (isset($_POST["nombres"])) {
  $nombres = $_POST["nombres"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $nombres = "";
}
// Verificar si la variable "apellidos" está definida
if (isset($_POST["apellidos"])) {
  $apellidos = $_POST["apellidos"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $apellidos = "";
}
// Verificar si la variable "idsexo" está definida
if (isset($_POST["idsexo"])) {
  $idsexo = $_POST["idsexo"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $idsexo = "";
}
// Verificar si la variable "es_extranjero" está definida
if (isset($_POST["es_extranjero"])) {
  $es_extranjero = $_POST["es_extranjero"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $es_extranjero = "";
}
// Verificar si la variable "identificacion" está definida
if (isset($_POST["identificacion"])) {
  $identificacion = $_POST["identificacion"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $identificacion = "";
}
// Verificar si la variable "direccion" está definida
if (isset($_POST["direccion"])) {
  $direccion = $_POST["direccion"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $direccion = "";
}
// Verificar si la variable "fecha_nacimiento" está definida
if (isset($_POST["fecha_nacimiento"])) {
  $fecha_nacimiento = $_POST["fecha_nacimiento"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $fecha_nacimiento = "";
}
// Verificar si la variable "celular" está definida
if (isset($_POST["celular"])) {
  $celular = $_POST["celular"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $celular = "";
}
// Verificar si la variable "correo" está definida
if (isset($_POST["correo"])) {
  $correo = $_POST["correo"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $correo = "";
}

// Crear la consulta para actualizar los datos del docente en la base de datos
$update = ("UPDATE docente 
	SET 
	nombres  ='" .$nombres. "',
  apellidos ='" .$apellidos. "',
  idsexo ='" .$idsexo. "',
  es_extranjero ='" .$es_extranjero. "',
  identificacion ='" .$identificacion. "',
  direccion ='" .$direccion. "',
  fecha_nacimiento ='" .$fecha_nacimiento. "',
  celular ='" .$celular. "',
  correo ='" .$correo. "'
  
WHERE id='" .$idRegistros. "'");
// Ejecutar la consulta de actualización
$result_update = mysqli_query($conexion, $update);
// Redirije a la pagina docente una vez terminado de correr el script
echo "<script type='text/javascript'>
        window.location='../consultaDocentes.php';
    </script>";
?>
