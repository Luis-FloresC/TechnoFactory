<?php 

ob_start();
session_start();

$txtNombre =  (isset($_SESSION['nombre']))?$_SESSION['nombre']:"";
$txtNombre =  (isset($_SESSION['apellido']))?$_SESSION['apellido']:"";
//Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
//nombre indica que el usuario ha iniciado sesión
    if (!isset($_SESSION["nombre"]))
    {
      header("Location: ../index.php");
    }
    else
    {
      require('../template/header.php');
    }

   
   $TotalClientes = TotalRows("Clientes");


    

?>

<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema de Ventas <small>Inicio</small></h1>        
    </div>
</div>
<section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">Clientes</div>
                <div class="tile-num full-reset"><?php  echo TotalRows("Clientes");  ?></div>
            </article>
            <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-desktop-mac"></i></div>
                <div class="tile-name all-tittles">Productos</div>
                <div class="tile-num full-reset"><?php  echo TotalRows("Productos");  ?></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-money"></i></div>
                <div class="tile-name all-tittles">Ventas</div>
                <div class="tile-num full-reset"><?php echo TotalRows("Ventas"); ?></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-bookmark-outline"></i></div>
                <div class="tile-name all-tittles">categorías</div>
                <div class="tile-num full-reset"><?php echo TotalRows("Categorias"); ?></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-account"></i></div>
                <div class="tile-name all-tittles">Empleados</div>
                <div class="tile-num full-reset"><?php echo TotalRows("Empleados"); ?></div>
            </article>
      
           
        </section>

<?php include('../template/footer.php'); ?>
