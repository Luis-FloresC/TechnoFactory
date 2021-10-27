<div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Este programa esta desarrollado para la venta de Productos.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
</div>

<footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Sistema de Venta de productos para una tienda,donde se lleva un control de todas las ventas realizadas por la tienda.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">

                        <table class="">
                            <thead>
                                <tr>
                                    <th colspan="3" class"all-tittles" ><center>Desarrolladores</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >
                                        <ul class="list-unstyled">
                                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Luis Flores <a href="https://www.facebook.com/"><i  class="zmdi zmdi-facebook zmdi-hc-fw footer-social"> </i></a><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></a></li>
                                        </ul>
                                    </td> 
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Diego López <a href="https://www.facebook.com/"><i  class="zmdi zmdi-facebook zmdi-hc-fw footer-social"> </i></a><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></a></li>
                                        </ul>
                                    </td>
                                   <td>
                                        <ul class="list-unstyled">
                                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; José Varela <a href="https://www.facebook.com/joseruben.varela.7/"><i  class="zmdi zmdi-facebook zmdi-hc-fw footer-social"> </i></a><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></a></li>
                                        </ul>
                                   </td>
                                </tr>
                                <tr>
                                    <td >
                                        <ul class="list-unstyled">
                                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Noe Manueles <a href="https://www.facebook.com/"><i  class="zmdi zmdi-facebook zmdi-hc-fw footer-social"> </i></a><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; David Mendoza <a href="https://www.facebook.com/DavidMXZ/"><i  class="zmdi zmdi-facebook zmdi-hc-fw footer-social"> </i></a><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Gerson Martínez <a href="https://www.facebook.com/"><i  class="zmdi zmdi-facebook zmdi-hc-fw footer-social"> </i></a><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></a></li>
                                        </ul>
                                    </td>    
                                </tr>
                            </tbody>
                        </table>

                    </div>
          
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© <?php $Year = date("Y"); echo $Year; ?> Grupo 6 - Portales web 2</div>
        </footer>
    </div>
  <script src="../Public/js/jquery-3.1.1.min.js"></script> 
    <!-- Bootstrap 3.3.5 -->
    <script src="../Public/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Public/js/app.min.js"></script>

    <!-- DATATABLES -->
    <script src="../Public/datatables/jquery.dataTables.min.js"></script>    
    <script src="../Public/datatables/dataTables.buttons.min.js"></script>
    <script src="../Public/datatables/buttons.html5.min.js"></script>
    <script src="../Public/datatables/buttons.colVis.min.js"></script>
    <script src="../Public/datatables/jszip.min.js"></script>
    <script src="../Public/datatables/pdfmake.min.js"></script>
    <script src="../Public/datatables/vfs_fonts.js"></script> 

    <script src="../Public/js/bootbox.min.js"></script> 
    <script src="../Public/js/bootstrap-select.min.js"></script>

    
    <script src="../Public/DiseñoVentas/vendor/jquery/jquery.min.js"></script>
<script src="../Public/DiseñoVentas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../Public/DiseñoVentas/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../Public/DiseñoVentas/js/all.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../Public/DiseñoVentas/js/sb-admin-2.min.js"></script>
<script src="../Public/DiseñoVentas/js/jquery.dataTables.min.js"></script>
<script src="../Public/DiseñoVentas/js/dataTables.bootstrap4.min.js"></script>
<script src="../Public/DiseñoVentas/js/sweetalert2@10.js"></script>
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
    var usuarioid = '<?php echo $_SESSION['idUser']; ?>';
    searchForDetalle(usuarioid);
  });
</script>



</body>
</html>