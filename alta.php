<?php
include_once 'conexion.php';
$nombre=$_POST['nombre'];
$paterno=$_POST['apaterno'];
$materno=$_POST['amaterno'];
$telefono=$_POST['telefono'];
$correo=$_POST['email'];
$usuario=$_POST['user_name'];
$pass=$_POST['password'];
$queryUsuario = "INSERT INTO usuarios(nombre,apaterno,amaterno,telefono,email,user_name,password) VALUES('$nombre','$apaterno','$amaterno', '$telefono', '$correo', '$usuario', '$password');";
$resultado=queryPSQL($queryUsuario) or die ('error al insertar los datos de usuario');
?>
