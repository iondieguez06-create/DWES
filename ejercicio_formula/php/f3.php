<?php

final class F3 extends Monoplaza
{
    private string $academia;

    public function __construct(
        string $nombrePiloto,
        string $nacionalidad,
        int $numero,
        string $escuderia,
        string $academia,
        int $puntos = 0
    ) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->academia = $academia;
    }

    public function getAcademia(): string
    {
        return $this->academia;
    }

    public function setAcademia(string $academia): void
    {
        $this->academia = $academia;
    }
    
        public function otorgarPuntos(int $posicion, bool $vueltaRapida): void {
            if (!$this->posicionValida($posicion)) {
                return; 
            }
            $tablaPuntos = [10,8,7,6,5,4,3,2,1];
            $puntos=0;
            if ($posicion >= 1 && $posicion <= 9) {
                $puntos = $tablaPuntos[$posicion - 1];
            }

            $this->puntos += $puntos;


        }
        public function posicionValida(int $posicion): bool {
            return $posicion >= 1 && $posicion <= 30;
        }
        public function subirAF2(bool $tieneSuperlicencia): F2
    {
        return new F2(
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $tieneSuperlicencia,
            $this->puntos
        );
    }
    }
