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
require_once '../template/header.php';
?>

<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema de Ventas <small>Realizar Venta</small></h1>        
    </div>
</div>



<div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <h4 class="text-center">Datos del Cliente</h4>
                                <a href="#" class="btn btn-primary btn_new_cliente">Nuevo Cliente  <i class="zmdi zmdi-face"></i> </a>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" name="form_new_cliente_venta" id="form_new_cliente_venta">
                                        <input type="hidden" name="action" value="addCliente">
                                        <input type="hidden" id="idcliente" value="1" name="idcliente" required>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Dni</label>
                                                    <input type="number" name="dni_cliente" id="dni_cliente" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nom_cliente" id="nom_cliente" class="form-control" disabled required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Genero</label>
                                                    <input type="text" name="genero" id="genero" class="form-control" disabled required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Fecha de Nacimiento</label>
                                                    <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" disabled required>
                                                </div>

                                            </div>
                                            <div id="div_registro_cliente" style="display: none;">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-center">Datos Venta</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> VENDEDOR</label>
                                        <p style="font-size: 16px; text-transform: uppercase; color: blue;"><?php echo $NombreUsuario; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Acciones</label>
                                    <div id="acciones_venta" class="form-group">
                                        <a href="#" class="btn btn-danger" id="btn_anular_venta">Anular</a>
                                        <a href="#" class="btn btn-primary" id="btn_facturar_venta"><i class="zmdi zmdi-money"></i> Generar Venta</a>
                                    </div>
                                </div>
                            </div>
                            <strong>
                              <div class="table-responsive">
                                <table class="table text-dark">
                                    <thead class="thead-white">
                                        <tr>
                                            <th width="100px">Código</th>
                                            <th>Des.</th>
                                            <th>Stock</th>
                                            <th width="100px">Cantidad</th>
                                            <th class="textright">Precio</th>
                                            <th class="textright">Precio Total</th>
                                            <th>Acciones</th>
                                        </tr>
                                        <tr>
                                            <td><input type="number" name="txt_cod_producto" id="txt_cod_producto"></td>
                                            <td id="txt_descripcion">-</td>
                                            <td id="txt_existencia">-</td>
                                            <td><input type="text" name="txt_cant_producto" id="txt_cant_producto"value="0" min="1" disabled></td>
                                            <td id="txt_precio" class="textright">0.00</td>
                                            <td id="txt_precio_total" class="txtright">0.00</td>
                                            <td><a href="#" id="add_product_venta" class="btn btn-success" style="display: none;">Agregar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Código</th>
                                            <th colspan="2">Descripción</th>
                                            <th>Cantidad</th>
                                            <th class="textright">Precio</th>
                                            <th class="textright">Precio Total</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detalle_venta">
                                        <!-- Contenido ajax -->

                                    </tbody>

                                    <tfoot id="detalle_totales">
                                        <!-- Contenido ajax -->
                                    </tfoot>
                                </table>
                                </strong>
                              </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <?php
require '../template/footer.php';
?>   
            </div>

              <!-- Begin Page Content -->
          



     


<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay datos",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
        "infoFiltered": "(Filtro de _MAX_ total registros)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "No se encontraron coincidencias",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        },
        "aria": {
          "sortAscending": ": Activar orden de columna ascendente",
          "sortDescending": ": Activar orden de columna desendente"
        }
      }
    });
    var usuarioid = '<?php echo $_SESSION['id']; ?>';
    searchForDetalle(usuarioid);
  });
</script>

<script type="text/javascript" src="scripts/ventas.js"></script>

<?php 
}
ob_end_flush();
?>
