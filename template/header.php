
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="../Public/assets/icons/book.ico" />
    <script src="../Public/js/sweet-alert.min.js"></script>
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
    <script src = "https://code.iconify.design/2/2.0.3/iconify.min.js"> </script>
    <script src="../Public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../Public/js/main.js"></script>
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
                    <li><a href="#"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
           
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Clientes <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li><a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Cliente</a></li>
                            <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar Cliente</a></li>
                            <li><a href="#"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Eliminar Cliente</a></li>
                        </ul>
                    </li>
               
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Empleados <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li ><a href="#"><i class="zmdi zmdi-save zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Empleado</a></li>
                            <li><a href="#"><i class="zmdi zmdi-edit zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar Empleado</a></li>
                            <li><a href="#"><i class="zmdi zmdi-delete zmdi-hc-fw"></i>&nbsp;&nbsp; Eliminar Empleado</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-money zmdi-hc-fw"></i>&nbsp;&nbsp; Ventas <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Realizar Venta</a>
                            </li>
                            
                           
                            <li>
                                <a href="#"><i class="zmdi zmdi-view-list zmdi-hc-fw"></i>&nbsp;&nbsp; Lista De Productos<span class="label label-danger pull-right label-mhover"><?php  echo "0"; ?></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Categorias y más <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li ><a href="#"><i class="zmdi zmdi-view-module zmdi-hc-fw"></i>&nbsp;&nbsp; Modelos</a></li>
                            <li><a href="#"><i class="zmdi zmdi-adb zmdi-hc-fw"></i>&nbsp;&nbsp; Marcas</a></li>
                            <li><a href="#"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Categorias</a></li>
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
                    <span class="all-tittles"><?php echo "Luis Flores"; ?></span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar Cliente">
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
        <!--
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de Ventas <small>Inicio</small></h1>
            </div>
        </div> -->
        