<?php

class Categoria {

	private $nombre;
	private $categorias = [];

	public function __construct($nombre){
		$this -> nombre = $nombre;
	}

	public function getNombre(){
		return $this -> nombre;
	}

	public function setNombre($nombre){
		$this -> nombre = $nombre;
	}

	
	public function obtenerCategorias(){
		return $this -> categorias;
	}

	public function obtenerCategoriasPorNombre($nombreCategoria){
		if (gettype($nombreCategoria) === "string" && $nombreCategoria != "") {
			$categoriasFiltradas = [];
			foreach ($this -> categorias as $key => $categoria) {
				if($categoria -> getNombre() === $nombreCategoria){
					$categoriasFiltradas[] = $categoria;
				}
			}
			return $categoriasFiltradas;
		}else{
			return "Error";
		}
	}

	public function agregarCategoria($categoria){
		array_push($this -> categorias, $categoria) ;
	}

	public function borrarCategoria( $nombreCategoria ){
		foreach ($this -> categorias as $key => $categoria) {
			if($categoria -> getNombre() == $nombreCategoria){
				unset($this -> categorias[$key]);
			}
		}
		$this -> categorias = array_values($this -> categorias);
	}

	public function editarNombreCategoria($nombre, $nuevoNombre){
		foreach ($this -> categorias as $key => $categoria) {
			if ($categoria -> getNombre() == $nombre) {
				$categoria -> setNombre($nuevoNombre);
			}
		}
	}

}
