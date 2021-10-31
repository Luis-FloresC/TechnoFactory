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
                          <h1 class="box-title">Clientes <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar </button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                           <th>#&nbsp;&nbsp;&nbsp;</th>
                           <th>DNI &nbsp;&nbsp;&nbsp;</th>
                           <th>Nombre</th>
                           <th>Apellido&nbsp;&nbsp;&nbsp;</th>
                           <th>Genero&nbsp;&nbsp;&nbsp;</th>
                           <th>Fecha Nacimiento&nbsp;&nbsp;&nbsp;</th>
                           <th>Fecha Registro&nbsp;&nbsp;&nbsp;</th>
                           <th>Estado&nbsp;&nbsp;</th>
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
<script type="text/javascript" src="scripts/listaClientes.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siPrestamos').addClass("active");
</script>