<?php

class libro{
        public $titulo;
        public $autor;
        public $anioPublicacion;

        public function __construct($titulo,$autor,$anioPublicacion)
        {
            $this ->titulo = $titulo;
            $this ->autor = $autor;
            $this ->anioPublicacion = $anioPublicacion;

        }

        public function obtener_info(){
            return "{$this->titulo} por {$this->autor}, publicado en {$this->anioPublicacion}";

        }
}

$milibro = new libro("cien años de soledad", "Gabriel Garcia Marquez", 1967);
echo $milibro->obtener_info()  ;
?>