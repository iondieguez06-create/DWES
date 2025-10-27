<?php
declare(strict_types=1);

final class F1 extends Monoplaza
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
            $tablaPuntos = [10,8,7,6,5,4,3,2,1];
            $puntos=0;
            if ($posicion >= 1 && $posicion <= 9) {
                $puntos = $tablaPuntos[$posicion - 1];
            }

            $this->puntos += $puntos;


        }
    public function posicionValida(int $posicion): bool {
        return $posicion >= 1 && $posicion <= 24;
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
