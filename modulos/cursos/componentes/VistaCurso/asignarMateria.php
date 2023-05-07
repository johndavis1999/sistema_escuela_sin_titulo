<?php
include('../../../../config/conexion.php');
$idcurso      = $_REQUEST['idcurso'];
$idmateria 	 = $_REQUEST['idmateria'];
$insertMateria = "insert into lista_materias( idcurso, idmateria) 
    values('{$idcurso}','{$idmateria}')";
$cone = $conexion ->query($insertMateria);
header("location: verCurso.php?id=$idcurso");
?>