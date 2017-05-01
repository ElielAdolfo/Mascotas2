<?php
	include 'conectar.php';

	$nombre=$_POST['nombre'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$localidad=$_POST['localidad'];
	$pais=$_POST['pais'];
	$senasag=$_POST['senasag'];
	$encargado=$_POST['id_enc'];

	$query="SELECT matricula FROM veterinario WHERE matricula = '$encargado'";
	$resultado=mysqli_query($conexion,$query);
	$filas=mysqli_num_rows($resultado);
	if($filas>0){
		include 'registrar_veterinaria.php';
		//header("locatmysqli_free_result($resultado);ion:index_admin.html");
	}else{
		echo "el encargado(veterinario) no se encuentra registrado";
	}
	 mysqli_free_result($resultado);

	
/*
	echo "$nombre";
	echo "$telefono";
	echo "$direccion";
	echo "$localidad";
	echo "$pais";
	echo "$senasag";
	echo "$encargado";*/

 ?>