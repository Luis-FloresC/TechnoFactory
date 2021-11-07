var tabla;

//Función que se ejecuta al inicio
function init(){
	
	listar();

}

//Funcion para limpiar los campos del formulario
function limpiar()
{
	$("#id").val("");
	$("#model").val("");
    $('#idestado').val("1");
    $('#idMarca').val("1");

}

//Evento submit al momento de presionar click al boton de guardar y modificar
$("#frmRegistrar").on('submit',function(e)
{
    e.preventDefault();
    // se obtiene el valor de los campos y se envia al archivo de Usuuario.php de la carpeta ajax
   var txtId= $("#id").val();
   var txtModel=$("#model").val();
   var idEstado =  $('#idestado').val();
   var idMarca = $('#idMarca').val();

   
        //se configura el metodo post y se envia una opcion la cual es guardar
        $.post("../ajax/modelo.php?op=guardar",
            {"id":txtId,"model":txtModel,"idEstado":idEstado,"marca":idMarca},
         function(data)
        {
            //El resultado del proceso almacenado lo convierte en texto
        var info = JSON.parse(data);
            
      // alert(info.msj);
//Muestra ventana modal
            bootbox.confirm(info.msj, function(result)
            { // confirmamos con una pregunta si queremos eliminar
                if(result)
                {
                    location.reload();
                }
                else
                {
                    limpiar();
                }
            })

    
           // bootbox.alert(info.msj);
           // location.reload();
        });

  

 
    
})

function mostrar(idModelo)
{
	$.post("../ajax/modelo.php?op=mostrar",{id : idModelo}, function(data, status)
	{
		data = JSON.parse(data);		
	
        
		$("#id").val(data.idModelo);
		$("#model").val(data.descripcionModelo);
        $('#idestado').val(data.idEstado);
        $('#idMarca').val(data.idMarca);

	

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
					url: '../ajax/modelo.php?op=listar',
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


function eliminarFila(idCategoria)
{
	bootbox.confirm("¿Está Seguro de eliminar la categoria?", function(result)
	{ // confirmamos con una pregunta si queremos eliminar
        if(result)
        {
            $.post("../ajax/modelo.php?op=eliminar", {id : idCategoria}, function(e)
            {
	            bootbox.alert(e);
	            tabla.ajax.reload();
            });
        }
        
    })
}

init();