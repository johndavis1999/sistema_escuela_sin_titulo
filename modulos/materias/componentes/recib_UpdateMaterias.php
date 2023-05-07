<?php
include('../../../config/conexion.php');

// Verificar si la variable "id" está definida
if (isset($_POST["id"])) {
  $idRegistros = $_POST["id"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $idRegistros = "";
}

// Verificar si la variable "idgrado" está definida
if (isset($_POST["codigo"])) {
  $codigo = $_POST["codigo"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $codigo = "";
}

// Verificar si la variable "idparalelo" está definida
if (isset($_POST["nombre"])) {
  $nombre = $_POST["nombre"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $nombre = "";
}

// Verificar si la variable "iddocente" está definida
if (isset($_POST["iddocente"])) {
  $iddocente = $_POST["iddocente"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $iddocente = "";
}
$update = ("UPDATE materias 
	SET 
	codigo  ='$codigo',
	nombre ='$nombre',
	iddocente ='$iddocente'

WHERE id='$idRegistros'
");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='../consultaMaterias.php';
    </script>";
?>
