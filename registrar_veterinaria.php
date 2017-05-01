<?php 
	$insert="INSERT INTO veterinaria(nombre, telefono, direccion, localidad, pais, senasag, idencargado) 
	VALUES ('$nombre', '$telefono', '$direccion', '$localidad', '$pais', '$senasag','$encargado')";
	$result= mysqli_query($conexion, $insert);

	if($result){
		echo "veterinaria registrada";
	}else{
		echo "error al registrarse";
	}
	mysqli_close($conexion);

 ?>