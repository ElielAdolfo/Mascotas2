<?php
	include 'conectar.php'; 
	$idmascota=$_POST['idMascota'];
	$idproducto=$_POST['idProducto'];
	$lote=$_POST['lote'];
	$nombre=$_POST['nombre']; 
	$fechven=$_POST['fechven'];
	$marca=$_POST['marca'];
	$detalles=$_POST['detalles'];
	$fechvac=$_POST['fechvac'];
	$fechprox=$_POST['fechprox'];
	$etiqueta=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$query="SELECT idMascota FROM mascotas WHERE idMascota='$idmascota'";
	$resultado=mysqli_query($conexion,$query);
	$filas=mysqli_num_rows($resultado);
	if($filas>0){
		include 'registrar_vacuna.php';
		//header("location:index_admin.html");
	}else{
		echo "la mascota no se encuentra registrada";
	}
	mysqli_free_result($resultado);
	
 ?>