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
        <h1 class="all-tittles">Sistema de Ventas <small>Productos</small></h1>        
    </div>
</div>



<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
 
            <div class="card">
                <div class="card-body">
                <form method="post" name="form_new_producto" id="form_new_producto">
                <input type="hidden" name="idproducto" id="idproducto" class="form-control" >
                        <div class="row">
                        
                                   
                             
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Producto</label>
                                    <input type="text" name="nombreproducto" id="nombreproducto" class="form-control" required >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="number" name="cantidadexistencia" id="cantidadexistencia" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select name="idcategoria" id="idcategoria" class="form-control">
                                                
                                <?php
                                    
                                    foreach($listaCategoria as $var) {
                                        echo '<option value="'.$var['id'].'">'.$var['nombre'].'</option>';
                                    }
                                ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Estado</label>
                                    
                                    <select name="idestado" id="idestado"class="form-control">
                                                
                                                <?php
                                                    
                                                    foreach($listaEstado as $var) {
                                                        echo '<option value="'.$var['id'].'">'.$var['nombre'].'</option>';
                                                    }
                                                ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio Estandar</label>
                                    <input type="number" name="precioestandar" id="precioestandar" class="form-control" required >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio Venta</label>
                                    <input type="number" name="precioventa" id="precioventa" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <select name="idmodelo" id="idmodelo" class="form-control">
                                                
                                                <?php
                                                    
                                                    foreach($listaModelo as $var) {
                                                        echo '<option value="'.$var['id'].'">'.$var['nombre'].'</option>';
                                                    }
                                                ?>
                                                    </select>
    
                                </div>
                                </div>
                                <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <textarea name="descripcionproducto" id="descripcionproducto" class="form-control" rows="10" cols="10" required></textarea>
                                   
                                </div>
                            </div>
                                <p class="text-center">
                                    <a href="#" class="btn btn-primary" id="btn_crear_producto"><i class="bi bi-bag"></i>Agregar producto</a> 
                                    <a href="#" class="btn btn-warning" id="btn_editar_producto"><i class="bi bi-bag"></i>Editar producto</a>
                                    <button type="reset"  class="btn btn-success">Limpiar</button>
                                </p>
                             
                                </div>
                    </form>
                </div>
                <div class="box-header with-border">
                          <h1 class="box-title">Lista de Productos </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                           <th>#&nbsp;&nbsp;&nbsp;</th>
                           <th>Nombre &nbsp;&nbsp;&nbsp;</th>
                           <th>Descripción</th>
                           <th>Modelo&nbsp;&nbsp;&nbsp;</th>
                           <th>Marca&nbsp;&nbsp;&nbsp;</th>
                           <th>Categoria&nbsp;&nbsp;&nbsp;</th>
                           <th>Cantidad&nbsp;&nbsp;&nbsp;</th>
                           <th>Precio&nbsp;&nbsp;&nbsp;</th>
                           <th>Estado&nbsp;&nbsp;</th>
                           <th>Accciones</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
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


<script type="text/javascript" src="scripts/producto.js"></script>

<?php 
}
ob_end_flush();
?>
