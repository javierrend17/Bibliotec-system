<?php

class Libro{

	private $nombre;
	private $autor;
	private $categoria;
	private $estado;
	private $libros = [];

	public function __construct($nombreLibro, $autor, $categoria, $estado) {
		$this -> nombre = $nombreLibro;
		$this -> autor = $autor;
		$this -> categoria = $categoria;
		$this -> estado = $estado;
	}

	public function getNombre(){
		return $this -> nombre;
	}

	public function setNombre($nombre){
		$this -> nombre = $nombre;
	}

	public function getAutor(){
		return $this -> autor;
	}

	public function setAutor($autor){
		$this -> autor = $autor;
	}

	public function getCategoria(){
		return $this -> categoria;
	}

	public function setCategoria($categoria){
		$this -> categoria = $categoria;
	}

	public function getEstado(){
		return $this -> estado;
	}

	public function setEstado($estado){
		$this -> estado = $estado;
	}

	public function obtenerLibros(){
    return $this -> libros;
  }

	public function obtenerLibrosPorNombre($nombreLibro){
    if (gettype($nombreLibro) === "string" && $nombreLibro != "") {
      $librosFiltrados = [];
      foreach ($this -> libros as $key => $libro) {
        if($libro -> getNombre() === $nombreLibro){
          $librosFiltrados[] = $libro;
        }
      }
      return $librosFiltrados;
    }else{
      return "Error";
    }
	}

  public function obtenerLibrosPorAutor($nombreAutor){
    if (gettype($nombreAutor) === "string" && $nombreAutor != "") {
      $librosFiltrados = [];
      foreach ($this -> libros as $key => $libro) {
        if($libro -> getAutor() -> getNombre() === $nombreAutor){
          $librosFiltrados[] = $libro;
        }
      }
      return $librosFiltrados;
    }else{
      return "Error";
    }
	}

  public function obtenerLibrosPorCategoria($nombreCategoria){
    if (gettype($nombreCategoria) === "string" && $nombreCategoria != "") {
      $librosFiltrados = [];
      foreach ($this -> libros as $key => $libro) {
        if($libro -> getCategoria() -> getNombre() === $nombreCategoria){
          $librosFiltrados[] = $libro;
        }
      }
      return $librosFiltrados;
    }else{
      return "Error";
    }
	}

  public function obtenerLibrosPorEstado($nombreEstado){
    if (gettype($nombreEstado) === "string" && $nombreEstado != "") {
      $librosFiltrados = [];
      foreach ($this -> libros as $key => $libro) {
        if($libro -> getEstado() -> getNombre() === $nombreEstado){
          $librosFiltrados[] = $libro;
        }
  	  }
      return $librosFiltrados;
    }else{
      return "Error";
    }
	}
    
  public function agregarLibro($libro){
    $this -> libros[] = $libro;
  }


  public function borrarLibro( $nombreLibro ){
		foreach ($this -> libros as $key => $libro) {
			if($libro -> getNombre() == $nombreLibro){
				unset($this -> libros[$key]);
			}
		}
		$this -> libros = array_values($this -> libros);
	}


  public function editarLibro($nombreLibro, $propiedad, $nuevaPropiedad){
		$bookFound = false;
		switch ($propiedad) {
			case 'nombre':
				foreach ($this -> libros as $key => $libro) {
					if($libro -> getNombre() == $nombreLibro){
						$libro -> setNombre($nuevaPropiedad);
						$bookFound = true;
					}
				}
				if ($bookFound === false) {
					return "No se encontro su libro.";
				}
				break;
			case 'autor':
				foreach ($this -> libros as $key => $libro) {
					if($libro -> getNombre() == $nombreLibro){
						$libro -> setAutor($nuevaPropiedad);
						$bookFound = true;
					}
				}
				if ($bookFound === false) {
					return "No se encontro su libro.";
				}
				break;
			case 'categoria':
				foreach ($this -> libros as $key => $libro) {
					if($libro -> getNombre() == $nombreLibro){
						$libro -> setCategoria($nuevaPropiedad);
						$bookFound = true;
					}
				}
				if ($bookFound === false) {
					return "No se encontro su libro.";
				}
				break;
			case 'estado':
				foreach ($this -> libros as $key => $libro) {
					if($libro -> getNombre() == $nombreLibro){
						$libro -> setEstado($nuevaPropiedad);
						$bookFound = true;
					}
				}
				if ($bookFound === false) {
					return "No se encontro su libro.";
				}
				break;	
			default:
				return "No se encontro la propiedad especificada";
				break;
		} 
  }
}
