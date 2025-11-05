<?php
    abstract class Jugador{
        protected $nombre;
        protected $nacionalidad;
        protected $equipo;
        protected $torneosGanados;
        protected $puntos;
        protected $categoria;

        public function __construct($nombre,$nacionalidad,$equipo,$torneosGanados,$puntos,$categoria){
            $this->nombre=$nombre;
            $this->nacionalidad=$nacionalidad;
            $this->equipo=$equipo;
            $this->torneosGanados=$torneosGanados;
            $this->puntos=$puntos;
            $this->categoria=$categoria;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }   

        public function getPuntos() { return $this->puntos; }
        public function setPuntos($puntos) { $this->puntos = $puntos; }

        public function getCategoria() { return $this->categoria; }
        public function setCategoria($categoria) { $this->categoria = $categoria; }

        //METODOS

        public function ganarTorneo($puntos){
            $this->puntos+=$puntos;
        }

        public abstract function subirNivel();

        public function __toString() {
        return "Nombre: {$this->nombre} | Nacionalidad: {$this->nacionalidad} | Equipo: {$this->equipo} | ".
               "Torneos Ganados: {$this->torneosGanados} | Puntos: {$this->puntos} | Categoría: {$this->categoria}";
        }

    }
?>