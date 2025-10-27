<?php

 class F4 extends Monoplaza{
    private string $paisCategoria;

    public function __construct(
        string $nombrePiloto,
        string $nacionalidad,
        int $numero,
        string $escuderia,
        string $paisCategoria,
        int $puntos = 0
    ) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->paisCategoria = $paisCategoria;
    }

    public function otorgarPuntos(int $posicion, bool $vueltaRapida): void {

        if (!$this->posicionValida($posicion)) {
            return; 
        }
        $tablaPuntos = [25, 18, 15, 12, 10, 8, 6, 4, 2, 1];
        $puntos = 0;
        if ($posicion >= 1 && $posicion <= 10) {
            $puntos = $tablaPuntos[$posicion - 1];
        }

        $this->puntos += $puntos;


    }
    public function posicionValida(int $posicion): bool {
        return $posicion >= 1 && $posicion <= 30;
    }
    public function subirAF3(string $academia): F3
{
    return new F3(
        $this->nombrePiloto,
        $this->nacionalidad,
        $this->numero,
        $this->escuderia,
        $academia,
        $this->puntos
    );
}
}   
?>