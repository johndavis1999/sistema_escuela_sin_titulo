<?php 
    $idcurso = $_GET['id'];
    $sqlListaMaterias=
    "SELECT
    materias.id as id, 
    materias.nombre as nombre, 
    materias.codigo as codigo, 
    docente.nombres as nombres,
    docente.apellidos as apellidos,
    lista_materias.id as lista_materias_id
    FROM lista_materias
    left join materias on lista_materias.idmateria=materias.id
    left join docente on materias.iddocente=docente.id
    WHERE lista_materias.idcurso = $idcurso";
    $queryMaterias = mysqli_query($conexion, $sqlListaMaterias);
    $cantMaterias     = mysqli_num_rows($queryMaterias);
?>