$("#frmAcceso").on('submit',function(e)
{
    e.preventDefault();
    loginf=$("#loginf").val();
    clavef=$("#clavef").val();
    var resul =""
    $.post("../ajax/usuario.php?op=verificar",
        {"loginf":loginf,"clavef":clavef},
        function(data)
    {
        resul = data;
        var tx = resul.indexOf("null");
        if (tx === -1)
        {
            $(location).attr("href","menu.php");
        }
        else
        {
            bootbox.alert("Usuario y/o Contraseña incorrectos...");
        }
    });
   
})