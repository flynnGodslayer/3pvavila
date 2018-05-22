<!DOCTYPE HTML>
<?php
	session_start();
	$SESSION['altas']=1;
?>

<html>
<head>
        <meta charset="UTF-8">
        <title>Login</title>
	<link href="css/index.css" type="text/css" rel="stylesheet">

</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
session_start();
if ($_SESSION['pag']==1) {
	echo "<h2>Registro de usuarios</h2><form action="alta.php" method="post"><p>Introduzca su nombre y apellidos</p>Nombre: <input type="text" name="nombre"><br><br>Apellido paterno: <input type="text" name="apaterno"><br><br>Apellido materno: <input type="text" name="amaterno"><br><br>Correo: <input type="text" name="correo"><br><br>Telefono: <input type="text" name="telefono"><input type="submit" value="Enviar"></form>";
}
else{
	header("Location: login.php");
}
?>

	<div class="fb-like" data-href="https://www.facebook.com/megatenmexico/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

	<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmegatenmexico%2F&width=450&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


</body>
</html>
