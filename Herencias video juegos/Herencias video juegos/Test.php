<?php
    require_once "Jugador.php";
    require_once "JugadorLol.php";
    require_once "JugadorCSGO.php";
    require_once "JugadorValorant.php";
    require_once "JugadorFifa.php";

    function main(){

        $jLol1= new JugadorLol("Sendoa", "Frances", "Tonto", 2, 23, "Hierro", "ACD");

        $jLol2= new JugadorLol("Ane", "Danesa", "Guapa", 4, 69, "Plata", "Support");

        $jCSGO= new JugadorCSGO("Ion", "Español", "Facha", 1, 13, "Madera", 12);

        $jFifa= new JugadorFifa("Mikel", "Mongol", "Tomatin", 3, 45, "Hierro", 1);

        $jValorant = new JugadorValorant("Julen", "Bulgaro", "Aitite", 2, 55, "Bronce", "Astra");

        ///////////////////////////////////////////

        echo $jLol1;
        echo "<br>";

        echo $jLol2;
        echo "<br>";

        echo $jCSGO;
        echo "<br>";

        echo $jFifa;
        echo "<br>";

        echo $jValorant;
        echo "<br>";

        /////////////////////////////////////////
        echo "<br>";
        echo "<br>";
        echo "<br>";
        ////////////////////////////////////////

        //GANAR TORNEO METODO

        $jCSGO->ganarTorneo(30);
        echo $jCSGO->getPuntos();

        echo "<br>";

        /////////////////////////////////////

        //SUBIR CATEGORIA METODO
        echo $jLol1->getCategoria();
        echo "<br>";
        $jLol1->subirNivel();
        echo "<br>";
        echo $jLol1->getCategoria();
    }

    main();
?>