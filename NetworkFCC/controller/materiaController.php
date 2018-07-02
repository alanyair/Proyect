<?php
// header("Content-Type: application/json; charset=UTF-8");
// print_r($_POST);

	require_once('../model/curso.php');

	# Creamos un objeto de la clase 
	$curso = new Inscribirse();
	
	
	$IdEvento=$_GET['InEvent'];
	$IdUser=$_GET['id'];
	
	# Llamamos al metodo registro para pasar a la funcion de guardado
	$curso->registroCurso($IdUser, $IdEvento);
	
	
	header("Location: ../login.php ");
		
	//echo "Los datos se guardan";
	
	
	//ob_end_flush()
  
?>
