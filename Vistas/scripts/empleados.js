$('#add_product_venta').click(function(e) {
    e.preventDefault();
    if ($('#txt_cant_producto').val() > 0) {
      var codproducto = $('#txt_cod_producto').val();
      var cantidad = $('#txt_cant_producto').val();
      var action = 'addProductoDetalle';
      $.ajax({
        url: '../ajax/ventas.php',
        type: 'POST',
        async: true,
        data: {action:action,producto:codproducto,cantidad:cantidad},
        success: function(response) {
          
          if (response != 'error') {
            var info = JSON.parse(response);
            $('#detalle_venta').html(info.detalle);
            $('#detalle_totales').html(info.totales);
            $('#txt_cod_producto').val('');
            $('#txt_descripcion').html('-');
            $('#txt_existencia').html('-');
            $('#txt_cant_producto').val('0');
            $('#txt_precio').html('0.00');
            $('#txt_precio_total').html('0.00');
  
            // Bloquear cantidad
            $('#txt_cant_producto').attr('disabled','disabled');
  
            // Ocultar boton agregar
            $('#add_product_venta').slideUp();
          }else {
            console.log('No hay dato');
          }
          viewProcesar();
        },
        error: function(error) {
  
        }
      });
    }
  });