<?php
// header("Content-Type: application/json; charset=UTF-8");
// print_r($_POST);

	require_once('../model/eventos.php');

	# Creamos un objeto de la clase Evento
	$evento = new Evento();
	
	if(isset($_POST['registrar'])) { 
		$Nombre = $_POST['Nombre'];
		$Fecha = $_POST['Fecha'];
		//$Imagen = $_FILES['Imagen']['name'];
		$Descripcion = $_POST['Descripcion'];	
		$Tipo = $_POST['Tipo'];
		$Intro = $_POST['intro'];
		$id = $_POST['IdP'];
		
		
		# Llamamos al metodo registro para pasar a la funcion de guardado
		$evento->registroEvento($Nombre, $Fecha, $_FILES['Imagen']['name'], $Descripcion, $Tipo, $Intro, $id);
		$evento->guardarImagen($_FILES['Imagen']['tmp_name'],$_FILES['Imagen']['name'],$_FILES['Imagen']["error"]);
		
		header("Location: ../login.php ");
		
		echo "Los datos se guardan";
		
	}else {
		header("Location: ../index.php ");
			 
		echo "Los datos no se guardan";
			
             }  
	//ob_end_flush()
  
?>
