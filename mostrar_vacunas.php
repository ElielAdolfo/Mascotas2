<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mostrar.css">
</head>
<body>
		<center>
		<table border="1">
			<thead>
				<tr>
					<th>codProducto</th>
					<th>Nombre</th>
					<th>lote</th>
					<th>vencimiento</th>
					<th>marca</th>
					<th>detalle</th>
					<th>F Vacunacion</th>
					<th>Sig Vacunacion</th>
					<th>etiqueta</th>

				</tr>


			</thead>
			<tbody>
			<?php
			include("conectar.php");
			$idmas=$_POST['idmas'];
			$query="SELECT * FROM vacunas WHERE idmascota ='$idmas'";
			echo "Mascota con id: $idmas vacunas:";
			$result=mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result)){

			
			?>
			<tr>
				<td><?php echo $row['codProducto']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['lote']; ?></td>
				<td><?php echo $row['fecha_venc']; ?></td>
				<td><?php echo $row['marca']; ?></td>
				<td><?php echo $row['detalle']; ?></td>
				<td><?php echo $row['fech_vac']; ?></td>
				<td><?php echo $row['fech_sig']; ?></td>
				<td><img height="100px"src="data:image/jpg;base64,<?php echo base64_encode($row['etiqueta']); ?>"/></td>
				
			</tr>
			<?php
				}

			?>
			<center><a href="index_vet.html">volver</a></center>
			</tbody>



		</table>

	</center>

</body>
</html>