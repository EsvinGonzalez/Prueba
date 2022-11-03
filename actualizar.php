<?php
//incluye la clase Persona y CrudPersona
	require_once('crud_persona.php');
	require_once('persona.php');
	$crud= new CrudPersona();
	$persona=new Persona();
	
	//busca la persona utilizando el id, que es enviado por GET desde la vista mostrar.php
	$persona=$crud->obtenerPersona($_GET['id']);
?>
<html style="background-image: url(mifondo.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: 1400px;">
<head>
	<title>Actualizar Persona</title>
</head>
<style>
	body {
		text-align: center;
	}
	table {
		margin: 0 auto;
		text-align: center;
		font-size: 40px;
		color: white;
		font-family: Cooper Black;
	}
	input {
		font-size: 20px;
		font-family: Cooper Black;

	}
</style>
<body><br><br><br><br><br>
	<form action='administrar_persona.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $persona->getId()?>'>
			<td>Nombre:</td>
			<td><input type='text' name='nombre' value='<?php echo $persona->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td><input type='text' name='edad' value='<?php echo $persona->getEdad()?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php"style="font-size: 30px;color: darkred ; font-family: cooper black;">Volver</a>
</form>
</body>
</html>