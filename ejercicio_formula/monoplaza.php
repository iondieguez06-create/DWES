<?php
declare(strict_types=1);

class Monoplaza
{
    private string $nombrePiloto;
    private string $nacionalidad;
    private int $numero;
    private string $escuderia;
    private int $puntos;

    public function __construct(string $nombrePiloto, string $nacionalidad, int $numero, string $escuderia, int $puntos = 0)
    {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->setPuntos($puntos);
    }

    // Getters
    public function getNombrePiloto(): string { return $this->nombrePiloto; }
    public function getNacionalidad(): string { return $this->nacionalidad; }
    public function getNumero(): int { return $this->numero; }
    public function getEscuderia(): string { return $this->escuderia; }
    public function getPuntos(): int { return $this->puntos; }

    // Setters
    public function setNombrePiloto(string $nombre): void { $this->nombrePiloto = $nombre; }
    public function setNacionalidad(string $nacionalidad): void { $this->nacionalidad = $nacionalidad; }
    public function setNumero(int $numero): void { $this->numero = $numero; }
    public function setEscuderia(string $escuderia): void { $this->escuderia = $escuderia; }
    public function setPuntos(int $puntos): void
    {
        if ($puntos < 0) {
            throw new InvalidArgumentException('Los puntos no pueden ser negativos.');
        }
        $this->puntos = $puntos;
    }

    public function añadirPuntos(int $delta): void
    {
        $nuevo = $this->puntos + $delta;
        if ($nuevo < 0) {
            throw new InvalidArgumentException('La operación dejaría puntos negativos.');
        }
        $this->puntos = $nuevo;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s (%s) - Nº %d - Escudería: %s - Puntos: %d',
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $this->puntos
        );
    }

    public function toArray(): array
    {
        return [
            'nombrePiloto' => $this->nombrePiloto,
            'nacionalidad' => $this->nacionalidad,
            'numero' => $this->numero,
            'escuderia' => $this->escuderia,
            'puntos' => $this->puntos,
        ];
    }
}