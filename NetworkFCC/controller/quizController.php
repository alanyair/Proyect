<?php
// header("Content-Type: application/json; charset=UTF-8");
// print_r($_POST);

	require_once('../model/quiz.php');

	# Creamos un objeto de la clase Evento
	$evento = new Evento();
	
	if(isset($_POST['registrar'])) { 
		$IdT = $_POST['IdP'];
		$pregunta = $_POST['quiz'];
		$respuesta = $_POST['answer'];
		$A1 = $_POST['A1'];	
		$A2 = $_POST['A2'];
		$A3 = $_POST['A3'];
		$A4 = $_POST['A4'];
		
		
		# Llamamos al metodo registro para pasar a la funcion de guardado
		$evento->registroEvento($IdT, $pregunta, $respuesta, $A1, $A2, $A3, $A4);
		//$evento->guardarImagen($_FILES['Imagen']['tmp_name'],$_FILES['Imagen']['name'],$_FILES['Imagen']["error"]);
		
		header("Location: ../login.php ");
		
		echo "Los datos se guardan";
		
	}else {
		header("Location: ../index.php ");
			 
		echo "Los datos no se guardan";
			
             }  
	//ob_end_flush()
  
?>
