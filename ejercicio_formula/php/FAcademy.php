<?php

 class FAcademy extends Monoplaza
{
    private int $potenciaMaxima; 

    public function __construct(
        string $nombrePiloto,
        string $nacionalidad,
        int $numero,
        string $escuderia,
        int $potenciaMaxima,
        int $puntos = 0
    ) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->potenciaMaxima = $potenciaMaxima;
    }

    public function getPotenciaMaxima(): int
    {
        return $this->potenciaMaxima;
    }

    public function setPotenciaMaxima(int $potenciaMaxima): void
    {
        $this->potenciaMaxima = $potenciaMaxima;
    }

    public function otorgarPuntos(int $posicion, bool $vueltaRapida): void
    {
        if (!$this->posicionValida($posicion)) {
            return;
        }

        $tablaPuntos = [18, 15, 12, 10, 8, 6, 4, 2, 1];
        $puntos = 0;

        if ($posicion >= 1 && $posicion <= 9) {
            $puntos = $tablaPuntos[$posicion - 1];
        }

        
        if ($vueltaRapida && $posicion <= 10) {
            $puntos += 1;
        }

        $this->puntos += $puntos;
    }

    public function posicionValida(int $posicion): bool
    {
        return $posicion >= 1 && $posicion <= 18;
    }

    public function subirAF4(string $paisCategoria): F4
    {
        return new F4(
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $paisCategoria,
            $this->puntos
        );
    }
}
