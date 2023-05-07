<?php 
$sqlCurso='SELECT curso.id as id, 
    paralelo.nombre as paralelo, 
    grado.nombre as grado,
    docente.nombres as docentenombre,
    docente.apellidos as docenteapellido,
    grado.id as idgrado,
    docente.id as iddocente,
    paralelo.id as idparalelo
    FROM curso 
    left join grado on curso.idgrado=grado.id
    left join paralelo on curso.idparalelo=paralelo.id
    left join docente on curso.iddocente=docente.id
    ORDER BY idgrado, idparalelo asc';
    $queryCurso = mysqli_query($conexion, $sqlCurso);
    $cantidad     = mysqli_num_rows($queryCurso);
?>