$(document).on("ready", main);

function main(){
	$("select").change(function(){
		var selected = $(this).val(); 
		$.ajax({
			url:"http://localhost/ejemplos/usuarios/cantidad",
			type: "POST",
			data: {cantidad:selected},
			success:function(){
				window.location.href = "http://localhost/ejemplos/usuarios";
			}
		});
	});
}