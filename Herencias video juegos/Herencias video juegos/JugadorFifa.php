<?php
    class JugadorFifa extends Jugador{
        private $numeroGoles;

        public function __construct($nombre, $nacionalidad, $equipo, $torneosGanados, $puntos, $categoria,$numeroGoles){
            parent::__construct($nombre,$nacionalidad,$equipo,$torneosGanados,$puntos,$categoria);

            $this->numeroGoles=$numeroGoles;

        }

        public function getNumeroGoles(){
            return this->numeroGoles;
        }

        public function setNumeroGoles($numero){
            $this->numeroGoles=$numero;
        }

        public function subirNivel(){
            
        }

        public function __toString() {
        return parent::__toString() . " | Número de goles: {$this->numeroGoles}";
        }
    }
?>