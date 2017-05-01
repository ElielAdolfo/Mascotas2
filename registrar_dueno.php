<?php 


$insertar="INSERT INTO responsable(CIResponsable,nombres,ApPaterno,ApMaterno,contrasena,fechnac, email,tel_fijo,
	celular,direccion,zona, localidad, pais, ocupacion, tipo_vivienda)
VALUES('$CI','$nombre','$ApPat','$ApMat','$contrasena','$fecha','$email','$fijo','$celular','$direccion',
	'$zona','$localidad','$pais','$ocupacion','$tipo_vivienda')";

$result1=mysqli_query($conexion,$insertar);


if(!$result1){
	echo "Error al registrarse";
}else{
	echo "Usuario registrado";
}
mysqli_close($conexion);

 ?>