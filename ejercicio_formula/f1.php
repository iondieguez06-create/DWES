<?php

declare(strict_types=1);

require_once 'Monoplaza.php';

class f1 extends Monoplaza{
    private string $patrocinadorPrincipal;

    public function __construct(string $nombrePiloto, string $nacionalidad, int $numero, string $escuderia, string $patrocinadorPrincipal, int $puntos = 0)
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinadorPrincipal = $patrocinadorPrincipal;
    }
    
    
    public function getPatrocinadorPrincipal(): string { 
        return $this->patrocinadorPrincipal; 
    }   
    public function setPatrocinadorPrincipal(string $patrocinador): void { 
        $this->patrocinadorPrincipal = $patrocinador; 
    }


}


?>