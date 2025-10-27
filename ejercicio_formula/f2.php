<?php

final class F2 extends Monoplaza
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
        $tablaPuntos = [25, 18, 15, 12, 10, 8, 6, 4, 2, 1];

        if ($posicion >= 1 && $posicion <= 10) {
            $puntos = $tablaPuntos[$posicion - 1];
        }

        $this->puntos += $puntos;


    }
    public function posicionValida(int $posicion): bool {
        return $posicion >= 1 && $posicion <= 30;
    }
    public function subirAF3(string $academia): f3
{
    return new f3(
        $this->nombrePiloto,
        $this->nacionalidad,
        $this->numero,
        $this->escuderia,
        $academia,
        $this->puntos
    );
}
}
