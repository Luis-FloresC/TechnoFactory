   
   <?php
   ob_start();
   session_start();
   //Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
   //nombre indica que el usuario ha iniciado sesión
   if (isset($_SESSION["nombre"]))
   {
     header("Location: ../index.php");
   }
   
   else
   {
   require '../template/header.php';

   ?>

   <!--Contenido-->
         <!-- Content Wrapper. Contains page content -->
         <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Sistema de Ventas <small>Empleados</small></h1>        
            </div>
        </div>
         <div class="container-fluid">        
           <!-- Main content -->

           <form id="frmRegistrar" name="frmRegistrar" method="post">
               <input type="hidden" value="0" name="id" id="id">
               <div class="row form-group">
                    <label for="dni" class="col-form-label col-md-2">DNI</label>
                    <div class="col-md-8">
                        <input type="text" name="dni" value="" id="dni" class="form-control"
                            placeholder="Escriba su numero de Identidad">
                    </div>
                </div>
           <div class="row form-group">
                    <label for="nombre" class="col-form-label col-md-2">Nombre</label>
                    <div class="col-md-8">
                        <input type="text" name="nombreEmpleado" value="" id="nombreEmpleado" class="form-control"
                            placeholder="Escriba su nombre">
                    </div>
                </div>
              
                <div class="row form-group">
                    <label for="apellido" class="col-form-label col-md-2">Apellido</label>
                    <div class="col-md-8">
                        <input type="text" name="apellidoEmpleado" value="" id="apellidoEmpleado" class="form-control"
                            placeholder="Escriba su apellido">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Fecha de Nacimiento</label>
                    <div class="col-md-8">
                        <input type="date" name="fechaNacimiento" getdate="" id="fechaNacimiento" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Estado</label>
                    <div class="col-md-8">
                        <select name="estado" id="estado">
                            <option value="1">Habilitado</option>
                            <option value="2">Inhabilitado</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Genero</label>
                    <div class="col-md-8 form-check form-check-inline">
                        <select name="txtGenero" id="txtGenero">

                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
              
                <p class="text-center">
                                <button type="reset" class="btn btn-success" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" name="btnAccion" id="btnAccion" value="guardar" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>  &nbsp;&nbsp; &nbsp;&nbsp;
                                <button type="submit" name="btnAccion" id="btnAccion" value="Modificar" class="btn btn-warning"><i class="zmdi zmdi-edit"></i> &nbsp;&nbsp; Modificar</button>
                </p> 
                

           </form>

           <section class="content">
               <div class="row">
                 <div class="col-md-12">
                     <div class="box">
                      
                       <!-- /.box-header -->
                       <!-- centro -->
                       <div class="panel-body table-responsive" id="listadoregistros">
                           <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                             <thead>
                              <th>#&nbsp;&nbsp;&nbsp;</th>
                              <th>DNI &nbsp;&nbsp;&nbsp;</th>
                              <th>Nombre del Cliente &nbsp;&nbsp;&nbsp;</th>
                              <th>Genero&nbsp;&nbsp;&nbsp;</th>
                              <th>Edad&nbsp;&nbsp;&nbsp;</th>
                              <th>Estado&nbsp;&nbsp;&nbsp;</th>
                              <th>Acciones&nbsp;&nbsp;&nbsp;</th>
                            
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
   <script type="text/javascript" src="scripts/empleados.js"></script>
   <?php 
   }
   ob_end_flush();
   ?>

