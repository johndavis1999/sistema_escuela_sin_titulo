<?php
    include('../../../config/conexion.php');
    $sqlRepresentante ='SELECT 
    representante.id as id, 
    representante.nombres as nombres, 
    representante.apellidos as apellidos, 
    representante.celular as celular, 
    representante.es_extranjero as es_extranjero,
    representante.identificacion as identificacion, 
    representante.direccion as direccion, 
    representante.fecha_nacimiento as fecha_nacimiento, 
    representante.correo as correo, 
    sexo.nombre as sexo, 
    sexo.id as idsexo 
    FROM representante 
    left join sexo on representante.idsexo=sexo.id
    ORDER BY nombres ASC';
    $queryRepresentante = mysqli_query($conexion, $sqlRepresentante);
    $cantidad     = mysqli_num_rows($queryRepresentante);
?>