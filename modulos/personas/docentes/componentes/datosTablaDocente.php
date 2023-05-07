<?php
    include('../../../config/conexion.php');
    $sqlDocente ='SELECT 
    docente.id as id, 
    docente.nombres as nombres, 
    docente.apellidos as apellidos, 
    docente.celular as celular, 
    docente.es_extranjero as es_extranjero,
    docente.identificacion as identificacion, 
    docente.direccion as direccion, 
    docente.fecha_nacimiento as fecha_nacimiento, 
    docente.correo as correo, 
    sexo.nombre as sexo, 
    sexo.id as idsexo 
    FROM docente 
    left join sexo on docente.idsexo=sexo.id
    ORDER BY nombres ASC';
    $queryDocente = mysqli_query($conexion, $sqlDocente);
    $cantidad     = mysqli_num_rows($queryDocente);
?>