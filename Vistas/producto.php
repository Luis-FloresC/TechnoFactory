<?php 
include('../template/header.php');
?>


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container mtf-5">
        
        <form class="row g-3">
            <div class="col-lg-6">
                <label for="idproducto" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="idproducto" required>
            </div>
            <div class="col-lg-6">
                <label for="nombreproducto" class="form-label">Producto</label>
                <input type="text" class="form-control" id="nombreproducto" required>
            </div>
            <div class="col-lg-6">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" required>
            </div>

            <div class="col-lg-6">
                <label for="cantidadexistente" class="form-label">Stock</label>
                <input type="text" class="form-control" id="cantidadexistente" required>
            </div>
            <div class="col-md-4">
                <label for="idcategoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="idcategoria" required>
            </div>
            <div class="col-md-4">
                <label for="idestado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="idestado" required>
            </div> 
            <div class="col-md-4">
                <label for="idmodelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="idmodelo" required>
            </div>           
            <div class="col-md-4">
                <label for="precioventa" class="form-label">Precio Venta</label>
                <input type="text" class="form-control" id="precioventa" required>
            </div>
            <div class="col-md-4">
                <label for="precioestandar" class="form-label">Precio Estandar</label>
                <input type="text" class="form-control" id="precioestandar" required>
            </div>    
            <div class="mb-3">
                <button type="sumit" class="btn btn-dark" name="btnGuardar" value='submit'>Guardar</button>
                <button type="reset" class="btn btn-dark">Limpiar</button>
            </div>
    </form>
    </div>

 


<?php include('../template/footer.php'); ?>