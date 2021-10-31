<?php
ob_start();
session_start();
//Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
//nombre indica que el usuario ha iniciado sesión
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../index.php");
}

else
{
require '../template/header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
     
      <div class="container-fluid">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Ventas &nbsp;&nbsp;&nbsp;<a class="btn btn-success" href="ventas.php" role="button">Agregar</a></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                           <th>#&nbsp;&nbsp;&nbsp;</th>
                           <th>Fecha &nbsp;&nbsp;&nbsp;</th>
                           <th>Cliente &nbsp;&nbsp;&nbsp;</th>
                           <th>Nombre&nbsp;&nbsp;&nbsp;</th>
                           <th>Cantidad&nbsp;&nbsp;&nbsp;</th>
                           <th>Precio&nbsp;&nbsp;&nbsp;</th>
                           <th>Sub Total&nbsp;&nbsp;&nbsp;</th>
                         
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
                 
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php
require '../template/footer.php';
?>
<script type="text/javascript" src="scripts/listVentas.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siPrestamos').addClass("active");
  $('#btnagregar').click(function(e) {
    $(location).attr("href","ventas.php");
  }

  function ClickAgregar()
  {
    $(location).attr("href","ventas.php");
  }
</script>