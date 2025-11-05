<?php 
require_once 'monoplaza.php';
require_once 'f1.php';
require_once 'f2.php';
require_once 'f3.php';
require_once 'f4.php';
require_once 'FAcademy.php';
require_once 'api.php';

function main(): void{
    echo "===== Simulación básica de Monoplazas =====<br><br>";
    $pilotof1= new F1("Max Verstappen", "Países Bajos", 1, "Red Bull", 0);
    echo "Datos del piloto:<br>";
    echo $pilotof1;
    echo "<br><br>";
    $f2 = new F2("Theo Pourchaire", "Francia", 5, "ART Grand Prix", 0);
    echo "Datos del piloto:<br>";
    echo $f2;
    echo "<br><br>";
    $f2->otorgarPuntos(9,True);
    echo "Datos del piloto:<br>";
    echo $f2;
    echo "<br><br>";
    $f1nuevo = $f2->subirAF1("Rolex");
    echo $f2;
    echo "<br><br>";
    echo($f1nuevo->getPatrocinadorPrincipal());
}
main();

?>