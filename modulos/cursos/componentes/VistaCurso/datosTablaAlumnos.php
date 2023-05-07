
<?php
$idcurso = $_GET['id'];
$sqlListaAlumnos=
"SELECT
alumnos.id as id, 
alumnos.nombres as nombresAlumno, 
alumnos.apellidos as apellidosAlumno, 
alumnos.identificacion as identificacion, 
representante.nombres as nombres,
representante.apellidos as apellidos,
lista_alumnos.id as lista_alumnos_id
FROM lista_alumnos
left join alumnos on lista_alumnos.idalumno=alumnos.id
left join representante on alumnos.idrepresentante=representante.id
WHERE lista_alumnos.idcurso = $idcurso";
$queryAlumnos = mysqli_query($conexion, $sqlListaAlumnos);
$cantAlumnos     = mysqli_num_rows($queryAlumnos);
?>