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
if (isset($_POST["idgrado"])) {
  $idgrado = $_POST["idgrado"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $idgrado = "";
}

// Verificar si la variable "idparalelo" está definida
if (isset($_POST["idparalelo"])) {
  $idparalelo = $_POST["idparalelo"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $idparalelo = "";
}

// Verificar si la variable "iddocente" está definida
if (isset($_POST["iddocente"])) {
  $iddocente = $_POST["iddocente"];
} else {
  // Si la variable no está definida, asignarle un valor por defecto
  $iddocente = "";
}

$update = ("UPDATE curso 
	SET 
	idgrado  ='$idgrado',
	idparalelo ='$idparalelo',
	iddocente ='$iddocente'

WHERE id='$idRegistros'
");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='../consultacursos.php';
    </script>";
?>
