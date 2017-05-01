<?php  
include 'conectar.php';

$nombre=$_POST['nombre'];
$ApPat=$_POST['paterno'];
$ApMat=$_POST['materno'];
$CI=$_POST['ci'];
$contrasena=$_POST['contrasena'];
$fecha=$_POST['fecha'];
$email=$_POST['email'];
$fijo=$_POST['telefono'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];
$zona=$_POST['zona'];
$localidad=$_POST['localidad'];
$pais=$_POST['pais'];
$ocupacion=$_POST['profesion'];
$tipo_vivienda=$_POST['tipovivienda'];

include 'registrar_dueno.php';
?>