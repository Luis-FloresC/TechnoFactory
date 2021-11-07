<?php 

$txtNombre =  (isset($_SESSION['nombre']))?$_SESSION['nombre']:"";
$txtApellido =  (isset($_SESSION['apellido']))?$_SESSION['apellido']:"";
$login = (isset($_SESSION['user']))?$_SESSION['user']:"";
$login = (isset($_SESSION['id']))?$_SESSION['id']:"";

$NombreUsuario = "$txtNombre $txtApellido";

include('../Conexion/connection.php');

$con = conectar();

function TotalRows($tabla)
{
   global $con;
   $query = "select coalesce(count(*),0)'Total' from $tabla;";
   $count = current($con->query($query)->fetch());
   return $count;
}


$AllModelo = $con->prepare("SELECT idModelo AS id , descripcionModelo as nombre FROM bd_techno_factory.Modelos;");
$AllModelo->execute();
$listaModelo = $AllModelo->fetchAll(PDO::FETCH_ASSOC);


$AllEstado = $con->prepare("SELECT idEstado as id,estado as nombre FROM bd_techno_factory.Estados;");
$AllEstado->execute();
$listaEstado = $AllEstado->fetchAll(PDO::FETCH_ASSOC);

$AllCategoria = $con->prepare("SELECT idCategoria as id,descripcionCategoria as nombre FROM bd_techno_factory.Categorias;");
$AllCategoria->execute();
$listaCategoria = $AllCategoria->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Inicio</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="Shortcut Icon" type="image/x-icon" href="../Public/assets/icons/book.ico" />
   <script src="../Public/js/sweet-alert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../Public/css/sweet-alert.css"> 
    <link rel="stylesheet" href="../Public/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../Public/css/normalize.css">
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Public/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../Public/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="../Public/js/modernizr.js"></script>
    <script src="../Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/datatables/jquery.dataTables.min.css">    
    <link href="../Public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../Public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
    <script src = "https://code.iconify.design/2/2.0.3/iconify.min.js"> </script>
    <script src="../Public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../Public/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/datatables/jquery.dataTables.min.css">    
    <link href="../Public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../Public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../Public/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Public/css/AdminLTE.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                Techno Factory
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../Public/assets/img/LT.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Sistema de Ventas</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="menu.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
           
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Clientes <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li><a href="\Vistas\clientes.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Cliente</a></li>
                            <li><a href="\Vistas\listaclientes.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar Cliente</a></li>
                            <li><a href="\Vistas\clientes.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Eliminar Cliente</a></li>
                        </ul>
                    </li>
               
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Empleados <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li ><a href="empleado.php"><i class="zmdi zmdi-save zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Empleado</a></li>
                            <li><a  href="emplea2.php"><i class="zmdi zmdi-edit zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar Empleado</a></li>
                            <li><a  href="empleado.php"><i class="zmdi zmdi-delete zmdi-hc-fw"></i>&nbsp;&nbsp; Eliminar Empleado</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-money zmdi-hc-fw"></i>&nbsp;&nbsp; Ventas <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="\Vistas\ventas.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Realizar Venta</a>
                            </li>
                            
                           
                            <li>
                                <a href="../Vistas/listaProductos.php"><i class="zmdi zmdi-view-list zmdi-hc-fw"></i>&nbsp;&nbsp; Lista De Productos<span class="label label-danger pull-right label-mhover"><?php  echo TotalRows("Productos"); ?></span></a>
                            </li>

                            <li>
                                <a href="../Vistas/listaVentas.php"><i class="zmdi zmdi-view-list zmdi-hc-fw"></i>&nbsp;&nbsp; Lista De Ventas<span class="label label-danger pull-right label-mhover"><?php  echo TotalRows("Ventas"); ?></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Categorias y más <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li ><a href="#"><i class="zmdi zmdi-view-module zmdi-hc-fw"></i>&nbsp;&nbsp; Modelos</a></li>
                            <li><a href="marcas.php"><i class="zmdi zmdi-adb zmdi-hc-fw"></i>&nbsp;&nbsp; Marcas</a></li>
                            <li><a href="categorias.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Categorias</a></li>
                            <li><a href="Usuario.php"><i class="zmdi zmdi-account-circle zmdi-hc-fw"></i>&nbsp;&nbsp; Usuarios</a></li>
                        </ul>
                    </li>
                    <li>
                        <!--<a href="../Vistas/producto.php"><i class="zmdi zmdi-laptop-mac zmdi-hc-fw"></i>&nbsp;&nbsp; Productos</a>-->
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Productos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li ><a href="../Vistas/producto.php"><i class="zmdi zmdi-save zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Producto</a></li>
                            <li><a href="#"><i class="zmdi zmdi-edit zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar Producto</a></li>
                            <li><a href="#"><i class="zmdi zmdi-delete zmdi-hc-fw"></i>&nbsp;&nbsp; Eliminar Producto</a></li>
                        </ul>
                
                    </li>
                 
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="../Public/assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php print $NombreUsuario; ?></span>
                </li>
                <li  class="tooltips-general exit-system-button" onclick="Close()">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="" data-placement="bottom" title="Buscar Cliente">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>

            </ul>
        </nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <!--
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de Ventas <small>Inicio</small></h1>
            </div>
        </div> -->
        