<?php
abstract class Monoplaza
{
    protected string $nombrePiloto;
    protected string $nacionalidad;
    protected int    $numero;
    protected string $escuderia;
    protected int    $puntos;

    public function __construct(
        string $nombrePiloto,
        string $nacionalidad,
        int $numero,
        string $escuderia,
        int $puntos = 0
    ) {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero       = $numero;
        $this->escuderia    = $escuderia;
        $this->puntos       = max(0, $puntos); 
    }

    
    abstract public function otorgarPuntos(int $posicion, bool $vueltaRapida): void;

    abstract public function posicionValida(int $posicion): bool;

    
}
