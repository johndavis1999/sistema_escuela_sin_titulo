<?php require('C:\xampp\htdocs\sintitulo\side.php'); ?>
<?php include('C:\xampp\htdocs\sintitulo\nav2.php'); ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#createChildresn">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
    <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
  </svg>
  Crear Representante
</button>
<?php include('componentes/modalRegRepresentantes.php')?>

<div class="container mt-5 p-5 col-lg-12">
  <?php
    include('componentes/datosTablaRepresentantes.php')
  ?>

  <div class="row text-center" style="background-color: #cecece">
    <div class="col-md-12"> 
      <strong>Lista de Representantes <span style="color: crimson">  ( <?php echo $cantidad; ?> )</span> </strong>
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
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead> 
                    <tbody>
                      <?php
                          while ($dataRepresentante = mysqli_fetch_array($queryRepresentante)) { ?>
                      <tr>
                        <td class="col-sm-5"><?php echo $dataRepresentante['nombres'], ' ', $dataRepresentante['apellidos'];?></td>
                        <td class="col-sm-4"><?php echo $dataRepresentante['correo']; ?></td>
                        <td class="col-sm-1"><?php echo $dataRepresentante['celular']; ?></td>
                        <td class="col-sm-1"><?php echo $dataRepresentante['sexo']; ?></td>
                        <td class="col-sm-1">
                           <!-- -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataRepresentante['id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                          </button>
                          <!-- -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataRepresentante['id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </button>
                        </td>
                      </tr>
                          <!--Ventana Modal para Actualizar--->
                          <?php  include('componentes/modalEliminarRepresentantes.php'); ?>
                          <!--Ventana Modal para Actualizar--->
                          <?php  include('componentes/ModalEditarRepresentantes.php'); ?>
                        <?php } ?>
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
      url = "componentes/recibDeleteRepresentantes.php";
        $.ajax({
          type: "POST",
          url: url,
          data: dataString,
          success: function(data)
          {
            window.location.href="consultaRepresentantes.php";
            $('#respuesta').html(data);
          }
        });
    return false;
    });
  });
</script>
</body>
</html>