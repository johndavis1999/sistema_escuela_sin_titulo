<?php require('C:\xampp\htdocs\sintitulo\side.php'); ?>
<?php include('C:\xampp\htdocs\sintitulo\nav2.php'); ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#createChildresn">
  Crear Curso
</button>
<?php 
       include('../../config/conexion.php');
    include('componentes/modalRegistrarCurso.php');
?>

<div class="container mt-5 p-5 col-lg-12">
    <?php 
        include('componentes/datosTablaCurso.php'); 
    ?>
    <div class="row text-center" style="background-color: #cecece">
        <div class="col-md-12"> 
            <strong>Lista de Cursos <span style="color: crimson">  ( <?php echo $cantidad; ?> )</span> </strong>
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
                                                <th  scope="col">Grado</th>
                                                <th  scope="col">Paralelo</th>
                                                <th  scope="col">Tutor</th>
                                                <th  scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                while ($dataCurso = mysqli_fetch_array($queryCurso)) { ?>
                                            <tr>
                                                <td class="col-sm-2"><?php echo $dataCurso['grado']; ?></td>
                                                <td class="col-sm-2"><?php echo $dataCurso['paralelo']; ?></td>
                                                <td class="col-sm-3"><?php echo $dataCurso['docentenombre'] , ' ',$dataCurso['docenteapellido'] ; ?></td>
                                                <td class="col-sm-3"> 
                                                    <!-- -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" 
                                                        data-target="#deleteChildresn<?php echo $dataCurso['id']; ?>">
                                                        Eliminar
                                                    </button>
                                                    <!-- -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                                                        data-target="#editChildresn<?php echo $dataCurso['id']; ?>">
                                                        Editar
                                                    </button>
                                                    <a href="componentes/vistaCurso/verCurso.php?id=<?php echo $dataCurso['id']; ?>" class="btn btn-secondary">Ver</a>
                                                </td>
                                            </tr>
                                            <!--Ventana Modal para la Alerta de Eliminar--->
                                            <?php include('componentes/ModalEliminar.php'); ?>
                                            <!--Ventana Modal para Actualizar--->
                                            <?php include('componentes/modalEditar.php');?>
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

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });
//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);

    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "componentes/recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="consultacursos.php";
                  $('#respuesta').html(data);
                }
            });
    return false;
    });
});
</script>
</body>