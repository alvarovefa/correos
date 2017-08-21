$(document).on("ready", inicio);

function inicio(){
	mostrarDatos("");
	$("#buscar").keyup(function(){
		$buscar = $("#buscar").val();
		mostrarDatos(buscar);
	});
}

function mostrarDatos(valor){
	$.ajax(
	{
		url:"http://localhost/mail/Welcome/mostrar",
		type: "POST",
		data: {buscar: valor},
		success: function(respuesta){
			alert(respuesta);
		}
	});
}