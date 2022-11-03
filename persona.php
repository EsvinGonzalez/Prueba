<?php 

class Persona{
		private $id;
		private $nombre;
		private $edad;
 
		function __construct(){}

		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
 
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getEdad(){
			return $this->edad;
		}
 
		public function setEdad($edad){
			$this->edad = $edad;
		}
 
		
		
	}

 ?>