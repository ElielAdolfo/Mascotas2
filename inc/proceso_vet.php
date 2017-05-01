<?php 
	
	include 'conectar.php';

	$nomVet=$_POST["nomVet"];
	$ApPat=$_POST["ApPat"];
	$ApMat=$_POST["ApMat"];
	$CI=$_POST["CI"];
	$email=$_POST["email"];
	$celular=$_POST["celular"];

	$nombre=$_POST["nombre"];
	$direc=$_POST["direc"];
	$num_lug=$_POST["num_lugar"];
	$sgs=$_POST["senasag"];
	$telef=$_POST["telefono"];
	$grado=$_POST["grado"];


	include 'reg_vet.php';




 ?>