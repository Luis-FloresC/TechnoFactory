$("#frmRegistrar").on('submit',function(e)
{
    e.preventDefault();
    // se obtiene el valor de los campos y se envia al archivo de Usuuario.php de la carpeta ajax
    txtUser=$("#txtUser").val();
    txtContra=$("#txtContra").val();
    txtEmail= $("#txtEmail").val();
    txtCargo = $("#txtCargo").val();
    txtEmpleado = $("#txtEmpleado").val();
    var resul =""
    //se configura el metodo post y se envia una opcion la cual es guardar
    $.post("../ajax/usuario.php?op=guardar",
        {"id":txtEmpleado,"user":txtUser,"contra":txtContra,"correo":txtEmail,"cargo":txtCargo},
        function(data)
    {
        var info = JSON.parse(data);
        
        resul = info.msj;
        if(info.msj == "Usuario Registrado con éxito")
        {
            swal(info.msj, {
                icon: "success",
              })
              .then((value) => {
                location.reload();
              });
        }
         else
        {
            bootbox.alert(info.msj);
        }

       // bootbox.alert(info.msj);
       // location.reload();
    });
    
})
