
$(document).ready(function(){

	$("button").click(function(){

		$.get("consulta_bd.php", function(data, status){

			$("#usuarios").html(data);

		});

	});

});
