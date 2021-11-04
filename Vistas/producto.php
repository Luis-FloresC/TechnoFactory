<?php 

ob_start();
session_start();
//Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
//nombre indica que el usuario ha iniciado sesión
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../index.php");
}

include('../template/header.php');

include('../Conexion/connection.php');
$con = conectar();
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


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
        <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Sistema de Ventas <small>Productos</small></h1>        
            </div>
        </div>
            <div class="card">
                <div class="card-body">
                    <form method="post" name="form_new_producto" id="form_new_producto">
                        <div class="row">
                        
                                    <input type="hidden" name="idproducto" id="idproducto" class="form-control" >
                             
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Producto</label>
                                    <input type="text" name="nombreproducto" id="nombreproducto" class="form-control" required >
                                </div>
                            </div>
                            <br>
                            <br>
                           
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
            </div>
        </div>

        <h1>Lista de Productos</h1>
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

<script type="text/javascript" src="scripts/producto.js"></script>


<?php include('../template/footer.php'); ?>