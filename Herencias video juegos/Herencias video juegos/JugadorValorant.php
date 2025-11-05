<?php
    class JugadorValorant extends Jugador{
        private $agenteFav;

        public function __construct($nombre, $nacionalidad, $equipo, $torneosGanados, $puntos, $categoria,$agenteFav){
            parent::__construct($nombre,$nacionalidad,$equipo,$torneosGanados,$puntos,$categoria);

            $this->agenteFav=$agenteFav;

        }

        public function getagenteFav(){
            return $this->agenteFav;
        }

        public function setagenteFav($numero){
            $this->agenteFav=$numero;
        }

        public function subirNivel(){
            
        }

        public function __toString() {
        return parent::__toString() . " | Agente favorito: {$this->agenteFav}";
        }

    }
?>