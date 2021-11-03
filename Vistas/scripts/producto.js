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
    $('#btn_crear_producto').click(function(e) {
      e.preventDefault();
      var action = 'addProducto';
      var codproducto = $('#idproducto').val();
      var nombreproducto = $('#nombreproducto').val();
      var descripcionproducto = $('#descripcionproducto').val();
      var cantidadexistencia = $('#cantidadexistencia').val();
      var idcategoria = $('#idcategoria').val();
      var idestado = $('#idestado').val();
      var precioest = $('#precioestandar').val();
      var preciovent = $('#precioventa').val();
      var codmodelo = $('#idmodelo').val();
      $.ajax({
        url: '../ajax/producto.php',
        type: 'POST',
        async: true,
        data: {action:action,codproducto:codproducto,nombreproducto:nombreproducto,descripcionproducto:descripcionproducto,cantidadexistencia:cantidadexistencia,idcategoria:idcategoria,idestado:idestado,precioest:precioest,preciovent:preciovent,codmodelo:codmodelo},
        success: function(response) {
        if (response != 0) {
          try {
            //var info = JSON.parse(response);
            swal(" producto guardado con Éxito! ", {
              icon: "success",
            })
            .then((value) => {
              $(location).attr("href","producto.php");
            });
            console.log(response);
          }
          catch(err) {
            swal("Error al guardar producto ", {
              icon: "error",
            })
            .then((value) => {
              $(location).attr("href","producto.php");
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
  
  
  