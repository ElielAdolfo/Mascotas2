<?php

	$insert="INSERT INTO vacunas(codProducto, nombre, lote, fecha_venc, marca, detalle, fech_vac, fech_sig, etiqueta, idmascota)
			   VALUES ('$idproducto', '$nombre', '$lote', '$fechven', '$marca', '$detalles', '$fechvac', '$fechprox', '$etiqueta', '$idmascota')";


	$result= mysqli_query($conexion, $insert);

	if($result){
		echo "vacuna registrada";
	}else{
		echo "error al registrarse";
	}
	mysqli_close($conexion);
	   

 ?>