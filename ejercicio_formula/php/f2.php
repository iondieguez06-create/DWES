<?php

 class F2 extends Monoplaza
{
    private bool $tieneSuperlicencia;

    public function __construct(
        string $nombrePiloto,
        string $nacionalidad,
        int $numero,
        string $escuderia,
        bool $tieneSuperlicencia,
        int $puntos = 0
    ) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->tieneSuperlicencia = $tieneSuperlicencia;
    }

    public function getTieneSuperlicencia(): bool
    {
        return $this->tieneSuperlicencia;
    }

    public function setTieneSuperlicencia(bool $tieneSuperlicencia): void
    {
        $this->tieneSuperlicencia = $tieneSuperlicencia;
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
            if ($vueltaRapida && $posicion <= 10) {
                $puntos += 1;
            }
            $this->puntos += $puntos;


        }
    public function posicionValida(int $posicion): bool {
        return $posicion >= 1 && $posicion <= 24;
    }
    public function subirAF1(string $patrocinadorPrincipal): F1
{
    return new F1(
        $this->nombrePiloto,
        $this->nacionalidad,
        $this->numero,
        $this->escuderia,
        $patrocinadorPrincipal,
        $this->puntos
    );
}
}
