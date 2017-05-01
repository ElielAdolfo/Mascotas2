<?php
	include 'conectar.php';
	$usuario=$_POST['nombrePro'];
	$usuario=$_POST['nombreMas'];

	$query = "SELECT $m.nombre , $r.CIResponsable FROM mascota m, responsable r  WHERE nombrePro = $r.nombre and r.";
	
	$resultado=mysqli_query($conexion,$query);

	$filas=mysqli_num_rows($resultado);
	if($filas>0){
		header("location:VacunaCertificado.html");
	}else{
		echo "Error en la autentificacion";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);

 ?>

 <!--debe buscar al propietario y -->