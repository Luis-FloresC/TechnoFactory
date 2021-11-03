<?php 
include('../template/header.php');
?>


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h4 class="text-center">Producto</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <form method="post" name="form_new_producto" id="form_new_producto">
                        <div class="row">
                        <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Codigo</label>
                                    <input type="text" name="idproducto" id="idproducto" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Producto</label>
                                    <input type="text" name="nombreproducto" id="nombreproducto" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="text" name="descripcionproducto" id="descripcionproducto" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="text" name="cantidadexistencia" id="cantidadexistencia" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <input type="text" name="idcategoria" id="idcategoria" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="text" name="idestado" id="idestado" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio Estandar</label>
                                    <input type="text" name="precioestandar" id="precioestandar" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio Venta</label>
                                    <input type="text" name="precioventa" id="precioventa" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <input type="text" name="idmodelo" id="idmodelo" class="form-control" >
                                </div>
                                </div>
                                <a href="#" class="btn btn-primary" id="btn_crear_producto"><i class="bi bi-bag"></i>Agregar producto</a>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="scripts/producto.js"></script>


<?php include('../template/footer.php'); ?>