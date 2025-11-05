<?php
    class JugadorLol extends Jugador{
        private $rolPrincipal;

        public function __construct($nombre, $nacionalidad, $equipo, $torneosGanados, $puntos, $categoria, $rolPrincipal){
            parent::__construct($nombre, $nacionalidad, $equipo, $torneosGanados, $puntos, $categoria);
            $this->rolPrincipal = $this->comprobarRol($rolPrincipal);

        }

        public function getRolPrincipal(){
            return $this->rolPrincipal;
        }

        public function setJugadorLol($rol){
            $this->rolPrincipal=$rol;
        }

        //metodo

        public function comprobarRol($rolPrincipal){
             if($rolPrincipal == "Top" || $rolPrincipal == "Mid" || $rolPrincipal == "Jungla" || $rolPrincipal == "ADC" || $rolPrincipal == "Support"){
                return $rolPrincipal;
            }else{
                // Devuelve por defecto "Jungla" si no coincide
                return "Jungla";
            }
        }

        public function subirNivel(){
            if($this->categoria=="Hierro"){
                $this->categoria="Bronce";
                echo "Ha subido de categoria BRONCE";

            }else if($this->categoria=="Bronce"){
                $this->categoria="Plata";
                echo "Ha subido de categoria Plata";

            }else if($this->categoria=="Plata"){
                $this->categoria="Oro";
                echo "Ha subido de categoria ORO";

            }else{
                echo "ESTAS EN LA CATEGORIA MÁS ALTA";
            }

        }

        public function __toString() {
        return parent::__toString() . " | Rol principal: {$this->rolPrincipal}";
        }





    }
?>