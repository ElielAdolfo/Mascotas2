<?php 

include 'conectar.php';

$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$peso=$_POST["peso"];
$color=$_POST["color"];
$obs=$_POST["obs"];
$raza=$_POST["raza"];
$sexo=$_POST["sexo"];
$tam=$_POST["tam"];
$nomProp=$_POST["nomProp"];
$ApPat=$_POST["ApPat"];
$ApMat=$_POST["ApMat"];
$CI=$_POST["CI"];
$email=$_POST["email"];
$tfijo=$_POST["tfijo"];
$celular=$_POST["celular"];
$ocup=$_POST["ocup"];
$zona=$_POST["zona"];
$tipV=$_POST["tipV"];
$NroViv=$_POST["NroViv"];



$insertar="INSERT INTO mascotas (nombre, edad, peso, color, observacion, raza, sexo, tamano, CIresp) 
VALUES ('$nombre','$edad','$peso','$color','$obs','$raza','$sexo','$tam','$CI')";

$insertar1="INSERT INTO responsable(CIResponsable,nombres,ApPaterno,ApMaterno,email,tel_fijo,celular,ocupacion,zona,tipo_vivienda,Nro_vivienda)
//VALUES('$CI','$nomProp','$ApPat','$ApMat','$email','$tfijo','$celular','$ocup','$zona','$tipV','$NroViv')";

//Verificar usuarios repetidos


//ejecutar registro
$result=mysqli_query($conexion,$insertar);
$result1=mysqli_query($conexion,$insertar1);


if(!$result){
	echo "Error al registrarse";
}else{
	echo "Usuario registrado";
}
mysqli_close($conexion);

 ?>