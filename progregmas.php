<?php 

include 'conectar.php';
$idprop=$_POST['propietario'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$procedencia=$_POST['procedencia'];
$color=$_POST['color'];
$observaciones=$_POST['observaciones'];
$raza=$_POST['raza'];
$sexo=$_POST['sex'];
$esterilizacion=$_POST['est'];
$tamano=$_POST['tamano'];
$peso=$_POST['peso'];
$foto=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query="SELECT CIResponsable FROM responsable WHERE CIResponsable='$idprop'";
$resultado=mysqli_query($conexion,$query);
	$filas=mysqli_num_rows($resultado);
	if($filas>0){
		 include 'regmasc.php';
		//header("location:index_admin.html");
	}else{
		echo "el dueño no se encuentra registrado";
	}
	mysqli_free_result($resultado);

/*echo "$color ";
echo "$sexo ";
echo "$esterilizacion ";
echo "$raza";
echo "$edad";*/


 ?>