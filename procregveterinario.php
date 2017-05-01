<?php
	include 'conectar.php'; 

	$nombre=$_POST['nombre'];
	$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];
	$ci=$_POST['CI'];
	$contrasena=$_POST['contrasena'];
	$fechnac=$_POST['fecha'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$celular=$_POST['celular'];
	$matricula=$_POST['matricula'];
	$especialidad=$_POST['especialidad'];

	include 'registrar_veterinario.php';
 ?>