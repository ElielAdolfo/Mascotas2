<?php  
	$Nmascota=$_REQUEST['nom'];
	$Edad=$_REQUEST['edad'];
	$Peso=$_REQUEST['peso'];
	$Color=$_REQUEST['color'];
	$Obser=$_REQUEST['obs'];
	$Raza=$_REQUEST['raza'];
	$Sexo=$_REQUEST['sexo'];
	$Tamn=$_REQUEST['tam'];


	if (isset ($_REQUEST['nom']) && !empty($_REQUEST['nom']) &&
		isset ($_REQUEST['edad']) && !empty($_REQUEST['edad']) &&
		isset ($_REQUEST['peso']) && !empty($_REQUEST['peso']) ) 
	{
		$EnlaceBD= mysql_connect(localhost,root,aniquilatr) or die("No se conecto a la BD!");
		mysql_select_db(bdmascotas,$EnlaceBD) or die("No se puede seleccionar lptm");

		mysql_query("INSERT INTO mascota VALUES('$Nmascota','$Edad','$Peso','$Color','$Obser','$Raza','$Sexo','$Tamn')");

		echo "Datos enviados correctamente";



	}else{
		echo "Error al enviar los datos";
	}
			





?>