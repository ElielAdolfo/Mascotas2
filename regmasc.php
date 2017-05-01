<?php 
	
$insertar="INSERT INTO mascotas(nombre ,edad, procedencia, color, observacion, raza,
	sexo, esterilizacion, tamano, peso, foto, CIresp)
VALUES('$nombre','$edad','$procedencia','$color','$observaciones','$raza','$sexo',
	'$esterilizacion','$tamano','$peso','$foto','$idprop')";


$result=mysqli_query($conexion,$insertar);
	if($result){
		echo "mascota registrada";
	}else{
		echo "error al registrarse";
	}
	mysqli_close($conexion);


 ?>