<?php 
	include 'conectar.php';

	$nombre=$_POST['nombre'];
	$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];
	$correo=$_POST['correo'];
	$cargo=$_POST['cargo'];
	$codigo=$_POST['codigo'];
	$telefono=$_POST['telefono'];
	$password=$_POST['password'];

	include 'registro_admin.php';
 ?>