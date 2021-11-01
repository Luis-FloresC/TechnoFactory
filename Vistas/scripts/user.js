var tabla;

//Función que se ejecuta al inicio
function init(){
	
	listar();

}


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

function mostrar(idusuario)
{
	$.post("../ajax/usuario.php?op=mostrar",{idusuario : idusuario}, function(data, status)
	{
		data = JSON.parse(data);		
	
        

		$("#txtUser").val(data.nombreUsuario);
		$("#txtContra").val(data.contrasenia);
		$("#txtEmail").val(data.correoElectronico);
		$("#txtCargo").val(data.idCargo);
		$("#txtEmpleado").val(data.idEmpleado);
	

 	})
}



function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/usuario.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

init();