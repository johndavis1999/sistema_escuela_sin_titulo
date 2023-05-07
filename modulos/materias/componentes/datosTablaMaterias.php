<?php 
    include('../../config/conexion.php');
$sqlMaterias='SELECT 
materias.id as id, 
materias.nombre as nombre, 
materias.codigo as codigo, 
docente.nombres as docentenombre,
docente.apellidos as docenteapellido,
docente.id as iddocente
FROM materias 
left join docente on materias.iddocente=docente.id
ORDER BY nombre ASC';
    $queryMaterias = mysqli_query($conexion, $sqlMaterias);
    $cantidad     = mysqli_num_rows($queryMaterias);
?>