<?php

class Autor{

	private $nombre;
	private $apellido;
	private $edad;
	private $autores = [];

	public function __construct($nombre, $apellido, $edad){
		$this -> nombre = $nombre;
		$this -> apellido = $apellido;
		$this -> edad = $edad;
	}

	public function getNombre(){
		return $this -> nombre;
	}

	public function setNombre($nombre){
		$this -> nombre = $nombre;
	}

	public function getApellido(){
		return $this -> apellido;
	}

	public function setApellido($apellido){
		$this -> apellido = $apellido;
	}

	public function getEdad(){
		return $this -> edad;
	}

	public function setEdad($edad){
		$this -> edad = $edad;
	}

	//Autores
	public function obtenerAutores(){
		return $this -> autores;
	}

	public function obtenerAutoresPorNombre($nombreAutor){
		if (gettype($nombreAutor) === "string" && $nombreAutor != "") {
			$autoresFiltrados = [];
			foreach ($this -> autores as $key => $autor) {
				if($autor -> getNombre() === $nombreAutor){
					$autoresFiltrados[] = $autor;
				}
			}
			return $autoresFiltrados;
		}else{
			return "Error";
		}
	}

	public function obtenerAutoresPorApellido($apellidoAutor){
		if (gettype($apellidoAutor) === "string" && $apellidoAutor != "") {
			$autoresFiltrados = [];
			foreach ($this -> autores as $key => $autor) {
				if($autor -> getApellido() === $apellidoAutor){
					$autoresFiltrados[] = $autor;
				}
			}
			return $autoresFiltrados;
		}else{
			return "Error";
		}
	}

public function obtenerAutoresPorEdad($edadAutor){
		if (gettype($edadAutor) === "integer") {
				$autoresFiltrados = [];
				foreach ($this -> autores as $key => $autor) {
						if($autor -> getEdad() === $edadAutor){
								$autoresFiltrados[] = $autor;
						}
				}
				return $autoresFiltrados;
		}else{
				return "Error";
		}
}

	public function borrarAutor( $nombreAutor ){
		foreach ($this -> autores as $key => $autor) {
			if($autor -> getNombre() == $nombreAutor){
				unset($this -> autores[$key]);
			}
		}
		$this -> autores = array_values($this -> autores);
	}

	public function editarNombreAutor($nombre, $apellido, $nuevoNombre){
		foreach ($this -> autores as $key => $autor) {
			if ($autor -> getNombre() == $nombre && $autor -> getApellido() == $apellido) {
				$autor -> setNombre($nuevoNombre);
			}
		}
	}

	public function editarApellidoAutor($nombre, $apellido, $nuevoApellido){
		foreach ($this -> autores as $key => $autor) {
			if ($autor -> getNombre() == $nombre && $autor -> getApellido() == $apellido) {
				$autor -> setApellido($nuevoApellido);
			}
		}
	}

	public function editarEdadAutor($nombre, $apellido, $nuevaEdad){
		foreach ($this -> autores as $key => $autor) {
			if ($autor -> getNombre() == $nombre && $autor -> getApellido() == $apellido) {
				$autor -> setEdad($nuevaEdad);
			}
		}
	}

}
