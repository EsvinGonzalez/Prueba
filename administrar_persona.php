<?php
//incluye la clase Persona y CrudPersona
require_once('crud_persona.php');
require_once('persona.php');
 
$crud= new CrudPersona();
$persona= new Persona();
 
	// si el elemento insertar no viene nulo llama al crud e inserta una persona
	if (isset($_POST['insertar'])) {
		$persona->setId($_POST['id']);
		$persona->setNombre($_POST['nombre']);
		$persona->setEdad($_POST['edad']);
		
		//llama a la función insertar definida en el crud
		$crud->insertar($persona);
		header('Location: index.php');
	
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la persona
	}elseif(isset($_POST['actualizar'])){
		$persona->setId($_POST['id']);
		$persona->setNombre($_POST['nombre']);
		$persona->setEdad($_POST['edad']);
		$crud->actualizar($persona);
		header('Location: index.php');
	
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina una persona
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>