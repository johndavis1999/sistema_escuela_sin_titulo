<?php
    include('../../../config/conexion.php');
    
    $sqlAlumno ='SELECT 
        alumnos.id as id, 
        alumnos.nombres as nombres, 
        alumnos.apellidos as apellidos, 
        alumnos.celular as celular, 
        alumnos.es_extranjero as es_extranjero,
        alumnos.identificacion as identificacion, 
        alumnos.direccion as direccion, 
        alumnos.fecha_nacimiento as fecha_nacimiento, 
        alumnos.correo as correo, 
        representante.nombres as nombresRepresentante, 
        representante.apellidos as apellidosRepresentante, 
        representante.id as idrepresentante, 
        sexo.nombre as sexo, 
        sexo.id as idsexo
        FROM alumnos
        left join sexo on  alumnos.idsexo=sexo.id
        left join representante on  alumnos.idrepresentante=representante.id
        ORDER BY nombres ASC';
    $queryAlumno = mysqli_query($conexion, $sqlAlumno);
    $cantidad     = mysqli_num_rows($queryAlumno);

    
?>