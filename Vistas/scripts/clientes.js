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
    var estado = $('#estado').val();
    var nombre = $('#nom_cliente').val();
    var apellido = $('#ape_cliente').val();
    var genero = $('#gen_cliente').val();
    var fechaNacimiento = $('#fechnac_cliente').val();
    $.ajax({
      url: '../ajax/clientes.php',
      type: 'POST',
      async: true,
      data: {action:action,dni:dni,nombre:nombre,apellido:apellido,genero:genero,fechaNacimiento:fechaNacimiento,estado:estado},
      success: function(response) {
        
        var info = JSON.parse(response);
        bootbox.confirm(info.msj, function(result)
        { // confirmamos con una pregunta si queremos eliminar
            if(result)
            {
                location.reload();
            }
            else
            { 
              location.reload();
            }
        })
      },
      error: function(error) {
        // location.reload();
      }
    });
  });
}); // fin ready


