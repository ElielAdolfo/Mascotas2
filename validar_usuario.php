<?php
	include 'conectar.php';
	$usuario=$_POST['login'];
	$password=$_POST['pass'];

	$query="SELECT idAdmin, password FROM admin WHERE idAdmin='$usuario' AND 
	password='$password'";
	
	$resultado=mysqli_query($conexion,$query);

	$filas=mysqli_num_rows($resultado);
	if($filas>0){
		header("location:index_admin.html");
	}else{
		mysqli_free_result($resultado);
		$query1="SELECT CIResponsable, contrasena FROM responsable WHERE CIResponsable='$usuario' AND 
		contrasena='$password'";
		$resultado1=mysqli_query($conexion,$query1);
		$fila=mysqli_num_rows($resultado1);
		if ($fila>0) {
			header("location:index_dueño.html");
		}else{
			mysqli_free_result($resultado1);
			$query2="SELECT CI, contrasena FROM veterinario WHERE CI='$usuario' AND 
			contrasena='$password'";
			$resultado2=mysqli_query($conexion,$query2);
			$fila2=mysqli_num_rows($resultado2);
			if ($fila2>0) {
				header("location:index_vet.html");
			}else{
			echo "Error en la autentificacion";
			}
		}
	}
	mysqli_free_result($resultado2);
	mysqli_close($conexion);

 ?>