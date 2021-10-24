<?php 
include('../template/header.php');



date_default_timezone_get('America/Honduras_city');
$fecha_actual=date("Y-m-d");
?>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <center>
                <h1 class="display-4">Empleado</h1>
            </center>
            <form action="" class="form">
                <br>
                <div class="row form-group">
                    <label for="nombre" class="col-form-label col-md-2">Nombre</label>
                    <div class="col-md-8">
                        <input type="text" name="nombre" value="" id="nombre" class="form-control"
                            placeholder="Escriba su nombre">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="apellido" class="col-form-label col-md-2">Apellido</label>
                    <div class="col-md-8">
                        <input type="text" name="apellido" value="" id="apellido" class="form-control"
                            placeholder="Escriba su apellido">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="direccion" class="col-form-label col-md-2">Direccion</label>
                    <div class="col-md-8">
                        <input type="text" name="direccion" value="" id="direccion" class="form-control"
                            placeholder="Escriba su direccion">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-label col-md-2">Fecha de Nacimiento</label>
                    <div class="col-md-8">
                        <input type="date" name="fecha" getdate="" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-form-lable col-md-4">Genero</label>
                    <div class="col-md-8 form-check form-check-inline">
                        <label class="form-check-label">

                            <input type="radio" class="form-check-input" name="genero">
                            Mujer
                        </label>
                        <label class="form-check-label">

                            <input type="radio" class="form-check-input" name="genero">
                            Hombre
                        </label>
                    </div>
                </div>
        </div>
    </div>
</div>




<?php include('../template/footer.php'); ?>



<?php/*

<! DOCTYPE html >
<html>
  <cabeza>
    <título>Página de registro</título>
    <link rel="hoja de estilo" type="text/css" href="css/bootstrap.css" />
  </cabeza>
  <cuerpo>
    <clase div ="contenedor">
      <clase div ="fila col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <Formulario de registrode > h1< /h1>
          </div>
          <div class="panel-body">
            <acción de formulario ="conectar.php" método="post">
              <div class="form-group">
                <label for="firstName">Nombre</label>
                <entrada
                  type="texto"
                  class="form-control"
                  id="nombre"
                  nombre="nombre"
                />
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</etiqueta>
                <entrada
                  type="texto"
                  class="form-control"
                  id="apellido"
                  nombre="apellido"
                />
              </div>
              <div class="form-group">
                <etiqueta para="género"><de género/etiqueta>
                <div>
                  <etiqueta para="masculino" clase="radio-en línea"
                    ><entrada
                      tipo="radio"
                      nombre="género"
                      valor="m"
                      id="macho"
 />male</etiqueta
                  >
                  <etiqueta para="femenino" clase="radio-en línea"
                    ><entrada
                      tipo="radio"
                      nombre="género"
                      valor="f"
                      id="hembra"
 /><femenino/etiqueta
                  >
                  <etiqueta para="otros" clase="radio-en línea"
                    ><entrada
                      tipo="radio"
                      nombre="género"
                      valor="o"
                      id="otros"
 />Otros</etiqueta
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <entrada
                  type="texto"
                  class="form-control"
                  id="correo electrónico"
                  nombre="correo electrónico"
                />
              </div>
              <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <entrada
                  type="contraseña"
                  class="form-control"
                  id="contraseña"
                  nombre="contraseña"
                />
              </div>
              <div class="form-group">
                <label for="número">Número de teléfono</etiqueta>
                <entrada
                  tipo="número"
                  class="form-control"
                  id="número"
                  nombre="número"
                />
              </div>
              < input type="submit" class="btn btn-primary" />
            </forma>
          </div>
          <div class="panel-footer text-right">
            <> pequeño&copy; Técnico Babaji< /pequeño>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="asertivo" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="redondeado mr-2" alt="...">
    < clasefuerte ="mr-auto">Bootstrap</strong>
    <> pequeñohace 11 minutos</pequeño>
    <tipo de botón ="botón" clase="ml-2 mb-1 cerrar" data-dismiss="toast" aria-label="Cerrar">
      <span aria-hidden="true">&times; </lapso>
    </botón>
  </div>
  <div class="toast-body">
 ¡Hola mundo! Este es un mensaje del sistema.
  </div>
</div>
  </cuerpo>
</html>*/
?>


<?php
/*
  conexion basededatos
  $nombre =  $_POST['nombre'];
  $apellido =  $_POST['apellido'];
  $genero =  $_POST['genero'];
  $direccion =  $_POST['direccion'];
  $fecha_actual =  $_POST['fecha_actual'];
  $número =  $_POST['número'];

	Conexión de base de datos
  $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
 eco "$conn->connect_error";
 die("Error de conexión : ".  $conn->connect_error);
	} más {
  $stmt =  $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssi",  $firstName,  $lastName,  $gender,  $email,  $password,  $number);
  $execval =  $stmt->ejecutar();
 echo  $execval;
 echo "Registro exitoso...";
  $stmt->cerrar();
  $conn->cerrar();
	}
  */
?>