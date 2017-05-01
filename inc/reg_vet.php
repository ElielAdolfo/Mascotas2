<?php 


	$insertar="INSERT INTO veterinario (CI, nombres, ApPaterno, ApMaterno, email, celular) 
	VALUES ('$CI','$nomVet','$ApPat','$ApMat','$email','$celular')";
 
	$insertar1="INSERT INTO veterinaria(nombre, direccion, num_lugar, senasag, telefono, grado, ci_vet)
	VALUES('$nombre','$direc','$num_lug','$sgs','$telef','$grado','$CI')";

	$result=mysqli_query($conexion,$insertar);
	$result1=mysqli_query($conexion,$insertar1);
	mysqli_close($conexion);


 ?>