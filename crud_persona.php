<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudPersona{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo persona
		public function insertar($persona){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO prueba values(:id,:nombre,:edad)');
			$insert->bindValue('id',$persona->getId());
			$insert->bindValue('nombre',$persona->getNombre());
			$insert->bindValue('edad',$persona->getEdad());
			$insert->execute();
 
		}
 
		// método para mostrar todas las personas
		public function mostrar(){
			$db=Db::conectar();
			$listaPersonas=[];
			$select=$db->query('SELECT * FROM prueba');
 
			foreach($select->fetchAll() as $persona){
				$myPersona= new Persona();
				$myPersona->setId($persona['ID']);
				$myPersona->setNombre($persona['Nombre']);
				$myPersona->setEdad($persona['Edad']);
				$listaPersonas[]=$myPersona;
			}
			return $listaPersonas;
		}
 
		// método para eliminar una persona, recibe como parámetro el id de la persona
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM prueba WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar una persona, recibe como parámetro el id de la persona
		public function obtenerPersona($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM prueba WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$persona=$select->fetch();
			$myPersona= new persona();
			$myPersona->setId($persona['ID']);
			$myPersona->setNombre($persona['Nombre']);
			$myPersona->setEdad($persona['Edad']);
			return $myPersona;
		}
 
		// método para actualizar una persona, recibe como parámetro la persona
		public function actualizar($persona){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE prueba SET Nombre=:nombre, Edad=:edad  WHERE ID=:id');
			$actualizar->bindValue('id',$persona->getId());
			$actualizar->bindValue('nombre',$persona->getNombre());
			$actualizar->bindValue('edad',$persona->getEdad());
			$actualizar->execute();
		}
	}
?>