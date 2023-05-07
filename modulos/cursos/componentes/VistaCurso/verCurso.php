<?php require('C:\xampp\htdocs\sintitulo\side.php'); ?>
<?php include('C:\xampp\htdocs\sintitulo\nav2.php'); ?>
<?php
// llama la conexión a la base de datos
include('C:\xampp\htdocs\sintitulo\config\conexion.php');


// Obtiene el ID del curso a partir del parámetro de consulta "id"
$idcurso = $_GET['id'];

// Realiza la consulta a la base de datos para obtener la información del curso con el ID especificado
$query = "SELECT * FROM curso WHERE id = $idcurso";
$result = mysqli_query($conexion, $query);

// Si se encontró un curso con ese ID, muestra la información
if (mysqli_num_rows($result) > 0) {
  $curso = mysqli_fetch_array($result);
  //echo '<h2>Información del curso</h2>';
  //echo '<p>Grado: '.$curso['idgrado'].'</p>';
  // consulta para obtener el nombre del docente
  $sql_paralelo = "SELECT nombre as seccion FROM paralelo WHERE id=".$curso['idparalelo'];
  $result_paralelo = mysqli_query($conexion, $sql_paralelo);
  $paralelo = mysqli_fetch_array($result_paralelo);
  //echo '<p>Paralelo: '.$paralelo['seccion'].'</p>';
  // consulta para obtener el nombre del docente
  $sql_docente = "SELECT nombres, apellidos FROM docente WHERE id=".$curso['iddocente'];
  $result_docente = mysqli_query($conexion, $sql_docente);
  $docente = mysqli_fetch_array($result_docente);
  // mostrar el nombre del docente
  //echo '<p>Docente: '.$docente['nombres'].' '.$docente['apellidos'].'</p>';

}
// Si no se encontró ningún curso con ese ID, muestra un mensaje de error
else {
  echo '<p>No se encontró ningún curso con ese ID.</p>';
}

include("datosTablaMaterias.php");
?>

<h2>Información del curso</h2>
<p>Grado: <?php echo $curso['idgrado']?> </p>
<p>Paralelo: <?php echo $paralelo['seccion']?> </p>
<p>Docente: <?php echo $docente['nombres'], ' ' ,$docente['apellidos']?> </p>


<!-- Contenedor de tabla 1 y datos -->
<div class="container mt-5 col-lg-12"><!-- Boton Crear materia -->    
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#asignateChildresn">
    Asignar Materia
    </button>
    <!-- Inicializa conexion con DB y llama modal de registro -->
    <?php 
        include('modalAsignarMateria.php');
    ?>
    <div class="row text-center" style="background-color: #cecece">
        <div class="col-md-12 showTable"> 
            <!-- Contador cantidad de elementos en tabla -->
            <strong>Materias asignadas <span style="color: crimson">  ( <?php echo $cantMaterias; ?> )</span> </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th  scope="col">Codigo</th>
                            <th  scope="col">Materia</th>
                            <th  scope="col">Docente</th>
                            <th  scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Se implementa While para recorrer la tabla y llamar los datos necesarios -->
                        <?php
                            while ($dataListaMaterias = mysqli_fetch_array($queryMaterias)) { ?>
                        <tr>
                            <td class="col-sm-2"><?php echo "ID: ", $dataListaMaterias['id'], " - ", $dataListaMaterias['codigo']; ?></td>
                            <td class="col-sm-4"><?php echo $dataListaMaterias['nombre']; ?></td>
                            <td class="col-sm-4"><?php echo $dataListaMaterias['nombres'] , ' ',$dataListaMaterias['apellidos'] ; ?></td>
                            <td> 
                                <!-- Elimiar -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" 
                                    data-target="#deleteChildresn<?php echo $dataListaMaterias['lista_materias_id']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                                <?php include('ModalEliminarMateria.php'); ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Contenedor de tabla 1 y datos -->
<div class="container mt-5 col-lg-12">
    <!-- Boton Añadir Alumno -->    
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#asignateChildresnAlumno">
    Asignar Alumno
    </button>
    <!-- Inicializa conexion con DB y llama modal de registro -->
    <?php 
        include('modalAsignarAlumno.php');
    ?>
    <?php include('datosTablaAlumnos.php')?>
    <div class="row text-center" style="background-color: #cecece">
        <div class="col-md-12"> 
            <!-- Contador cantidad de elementos en tabla -->
            <strong>Alumnos asignadas <span style="color: crimson">  ( <?php echo $cantAlumnos; ?> )</span> </strong>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12 p-2">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th  scope="col">Alumno</th>
                                                <th  scope="col">Cedula</th>
                                                <th  scope="col">Representante</th>
                                                <th  scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Se implementa While para recorrer la tabla y llamar los datos necesarios -->
                                            <?php
                                                while ($dataListaAlumnos = mysqli_fetch_array($queryAlumnos)) { ?>
                                            <tr>
                                                <td class="col-sm-4"><?php echo $dataListaAlumnos['nombresAlumno'], " ", $dataListaAlumnos['apellidosAlumno']; ?></td>
                                                <td class="col-sm-2"><?php echo $dataListaAlumnos['identificacion']; ?></td>
                                                <td class="col-sm-4"><?php echo $dataListaAlumnos['nombres'] , ' ',$dataListaAlumnos['apellidos'] ; ?></td>
                                                <td> 
                                                    <!-- Elimiar -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" 
                                                        data-target="#deleteChildresn<?php echo $dataListaAlumnos['lista_alumnos_id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>
                                                    <?php include('ModalEliminarAlumno.php'); ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });
//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);

    $('.btnBorrarMateria').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_DeleteMateria_Curso.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="verCurso.php?id=<?php echo $idcurso; ?>";
                  $('#respuesta').html(data);
                }
            });
    return false;
    });

    $('.btnBorrarAlumno').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_DeleteAlumno_Curso.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="verCurso.php?id=<?php echo $idcurso; ?>";
                  $('#respuesta').html(data);
                }
            });
    return false;
    });
});
</script>
<script>
$(document).ready(function() {
  // Al hacer clic en el título de la tabla, ocultar o mostrar la tabla
  $('.showTable').click(function() {
    $('tbody').toggle();
  });
});
</script>

</body>