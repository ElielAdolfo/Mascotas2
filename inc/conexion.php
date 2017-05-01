<?php 
		$conexion= new mysqli("localhost","root","","imagen");


		if($conexion){
			echo "Conexion exitosa";
		}
		else{
			echo "falla de conexion";
		}



 ?>