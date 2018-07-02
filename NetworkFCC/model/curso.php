<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

	class Inscribirse extends Conexion{
		  
		public function registroCurso($IdUser, $IdEvento){
	    
			parent::conectar();	
			
			#Guardamos los datos en la base de datos;
			//echo "INSERT INTO clase (IdUser, IdEvento) VALUES ('".$IdUser."','".$IdEvento."')";
			
			parent::query("INSERT INTO clase (IdE, IdM) VALUES ('".$IdUser."','".$IdEvento."')");
		
			parent::cerrar();
			
		}
			
		
		
		public function mostrarEvento(){
	    
			parent::conectar();	
			
			#Mostramos los datos en la base de datos;
			$varx = parent::query('$query="SELECT InEvent, Nombre, Fecha, Imagen, Descripcion FROM eventos"');
			//parent::cerrar();
			return $varx;
			
		}
			
		public function modificarEvento($Nombre, $Fecha, $Imagen, $Descripcion, $InEvent){
			parent::conectar();	
			
			#Guardamos los datos en la base de datos;
			parent::query("UPDATE eventos SET Nombre = '".$Nombre."', Fecha = '".$Fecha."', Imagen = '".$Imagen."', Descripcion = '".$Descripcion."' WHERE InEvent = '".$InEvent."'");
		
			parent::cerrar();
		}

	}

?>
