<?php 
	$insert="INSERT INTO admin(idAdmin, nombre, apPaterno, apMaterno, correo, cargo, telefono, password)
	VALUES ('$codigo', '$nombre', '$paterno', '$materno', '$correo', '$cargo', '$telefono', '$password')";


	$result= mysqli_query($conexion, $insert);

	if($result){
		echo "admin registrado";
	}else{
		echo "error al registrarse";
	}
	mysqli_close($conexion);

 ?>