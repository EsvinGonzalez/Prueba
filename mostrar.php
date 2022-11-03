<?php
//incluye la clase Persona y CrudPersona
require_once('crud_persona.php');
require_once('persona.php');
$crud=new CrudPersona();
$persona= new Persona();

//obtiene todas las perosnas con el método mostrar de la clase crud
$listaPersonas=$crud->mostrar();
?>
 
<html style="background-image: url(mifondo.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: 1400px;">

<head>
	<title>Mostrar Personas</title>
</head>
<style>
	body {
		text-align: center; 
		font-size: 30px;
		font-family: cooper black;
	}
	
</style>
<body>
	<table  border=5 style="margin: 0 auto; 
			font-size: 30px; 
			padding: 10px; 
			font-family: Cooper Black; 
			color: white; 
			text-align: center;
			width: 60%;">

		<head><br><br><br><br><br>
			<td>ID</td>
			<td>Nombre</td>
			<td>Edad</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaPersonas as $persona) {?>
			<tr>
				<td><?php echo $persona->getId() ?></td>
				<td><?php echo $persona->getNombre() ?></td>
				<td><?php echo $persona->getEdad()?> </td>
				<td><a href="actualizar.php?id=<?php echo $persona->getId()?>&accion=a"style="color: skyblue;">Actualizar</a> </td>
				<td><a href="administrar_persona.php?id=<?php echo $persona->getId()?>&accion=e"style="color: indianred;">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table><br><br>
	<a href="index.php" style="color: darkred;">Volver</a>
</body>
</html>