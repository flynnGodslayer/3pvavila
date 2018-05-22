
$(document).ready(function(){

	$("button").click(function(){

		$.get("consulta_bd.js", function(data, status){

			$("#usuarios").html(data);

		});

	});

});
