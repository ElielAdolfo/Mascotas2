<?php 
	$insert= "INSERT INTO veterinario(CI, nombres, ApPaterno, ApMaterno, contrasena, fech_nac, email, tel_fijo, celular, matricula, especialidad) 
	VALUES ('$ci', '$nombre', '$paterno', '$materno', '$contrasena','$fechnac', '$email','$telefono', '$celular', '$matricula', '$especialidad')";

	$result= mysqli_query($conexion, $insert);

	if($result){
		echo "usuario registrado";
	}else{
		echo "error al registrarse";
	}
	mysqli_close($conexion);

 ?>