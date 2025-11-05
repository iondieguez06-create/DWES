<?php
    class JugadorCSGO extends Jugador{
        private $precision;

        public function __construct($nombre, $nacionalidad, $equipo, $torneosGanados, $puntos, $categoria,$precision){
            parent::__construct($nombre,$nacionalidad,$equipo,$torneosGanados,$puntos,$categoria);

            $this->precision=$precision;

        }

        public function getPrecision(){
            return this->precision;
        }

        public function setPrecision($precision){
            $this->precision=$precision;
        }

        public function subirNivel(){
            
        }

        public function __toString() {
        return parent::__toString() . " | Precisión: {$this->precision}";
        }

    }
?>