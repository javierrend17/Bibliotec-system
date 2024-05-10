<?php

class Estado{

	private $nombre;
	private $estados = [];

	public function __construct($nombre){
		$this -> nombre = $nombre;
	}

	public function getNombre(){
		return $this -> nombre;
	}

	public function setNombre($nombre){
		$this -> nombre = $nombre;
	}

	//Estados
	public function obtenerEstados(){
		return $this -> estados;
	}

	public function agregarEstado($nombreEstado){
		$this -> estados[] = new Estado($nombreEstado);
	}

	public function borrarEstado( $nombreEstado ){
		foreach ($this -> estados as $key => $estado) {
			if($estado -> getNombre() == $nombreEstado){
				unset($this -> estados[$key]);
			}
		}
		$this -> estados = array_values($this -> estados);
	}

	public function editarNombreEstado($nombre, $nuevoNombre){
		foreach ($this -> estados as $key => $estado) {
			if ($estado -> getNombre() == $nombre) {
				$estado -> setNombre($nuevoNombre);
			}
		}
	}

}

