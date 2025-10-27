<?php

     class F1 extends Monoplaza
{
    private string $patrocinadorPrincipal;

    public function __construct(
        string $nombrePiloto,
        string $nacionalidad,
        int $numero,
        string $escuderia,
        string $patrocinadorPrincipal,
        int $puntos = 0
    ) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinadorPrincipal = $patrocinadorPrincipal;
    }

    public function getPatrocinadorPrincipal(): string
    {
        return $this->patrocinadorPrincipal;
    }

    public function setPatrocinadorPrincipal(string $patrocinadorPrincipal): void
    {
        $this->patrocinadorPrincipal = $patrocinadorPrincipal;
    }
    public function otorgarPuntos(int $posicion, bool $vueltaRapida): void {
            if (!$this->posicionValida($posicion)) {
                return; 
            }
            $tablaPuntos = [25,18,15,12,10,8,6,4,2,1];
            $puntos=0;
            if ($posicion >= 1 && $posicion <= 10) {
                $puntos = $tablaPuntos[$posicion - 1];
            }
            if ($vueltaRapida && $posicion <= 10) {
                $puntos += 1;
            }
            $this->puntos += $puntos;


        }
    public function posicionValida(int $posicion): bool {
        return $posicion >= 1 && $posicion <= 22;
    }
   public function subirAF1(): void
    {
        echo "F1 es la mejor, no puedes subir mas arriba";
    }
}
