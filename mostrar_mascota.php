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
					<th>idMascota</th>
					<th>Nombre</th>
					<th>edad</th>
					<th>procedencia<th>
					<th>observacion</th>
					<th>raza</th>
					<th>sexo</th>
					<th>esterilizacion</th>
					<th>tamano</th>
					<th>peso</th>
					<th>foto</th>

				</tr>


			</thead>
			<tbody>
			<?php
			include("conectar.php");
			$idmas=$_POST['idmas'];
			$query="SELECT * FROM mascotas WHERE idMascota ='$idmas'";
			echo "Mascota id: $idmas ";
			$result=mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result)){

			
			?>
			<tr>
				<td><?php echo $row['idMascota']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['edad']; ?></td>
				<td><?php echo $row['procedencia']; ?></td>
				<td><?php echo $row['color']; ?></td>
				<td><?php echo $row['observacion']; ?></td>
				<td><?php echo $row['raza']; ?></td>
				<td><?php echo $row['sexo']; ?></td>
				<td><?php echo $row['esterilizacion']; ?></td>
				<td><?php echo $row['tamano']; ?></td>
				<td><?php echo $row['peso']; ?></td>
				<td><img height="100px"src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/></td>
				
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