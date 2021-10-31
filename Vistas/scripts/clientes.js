$(document).ready(function(){
  $('.btnMenu').click(function(e) {
    e.preventDefault();
    if($('nav').hasClass('viewMenu')) {
      $('nav').removeClass('viewMenu');
    }else {
      $('nav').addClass('viewMenu');
    }
  });

  $('nav ul li').click(function() {
    $('nav ul li ul').slideUp();
    $(this).children('ul').slideToggle();
  });

  // Guardar Cliente
  $('#btn_crear_cliente1').click(function(e) {
    e.preventDefault();
    var action = 'addCliente';
    var dni = $('#dni_cliente').val();
    var nombre = $('#nom_cliente').val();
    var apellido = $('#ape_cliente').val();
    var genero = $('#gen_cliente').val();
    var fechaNacimiento = $('#fechnac_cliente').val();
    $.ajax({
      url: '../ajax/clientes.php',
      type: 'POST',
      async: true,
      data: {action:action,dni:dni,nombre:nombre,apellido:apellido,genero:genero,fechaNacimiento:fechaNacimiento},
      success: function(response) {
      if (response != 0) {
        try {
          //var info = JSON.parse(response);
          swal(" Cliente Fuardado con Éxito! ", {
            icon: "success",
          })
          .then((value) => {
            $(location).attr("href","clientes.php");
          });
          console.log(response);
        }
        catch(err) {
          swal("Error al guardar cliente ", {
            icon: "error",
          })
          .then((value) => {
            $(location).attr("href","clientes.php");
          });
          console.log(err);
          //alert("Venta Realizada con exito...");

        }
          
      }else {
        console.log('no hay datos');
      }
      },
      error: function(error) {
        // location.reload();
      }
    });
  });
}); // fin ready


