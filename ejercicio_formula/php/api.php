<?php

$numeros = [16, 44];
$pilotos = [];

for ($i = 0; $i < count($numeros); $i++) {
    $num = $numeros[$i];
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.openf1.org/v1/drivers?driver_number={$num}&session_key=latest",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    $data = json_decode($response);
    if ($data) {
        $pilotos[] = [
            "numero" => $num,
            "nombre" => $data[0]->full_name ?? "N/D",
            "acronimo" => $data[0]->name_acronym ?? "---",
            "equipo" => $data[0]->team_name ?? "Sin equipo"
        ];
    }
}

foreach ($pilotos as $p) {
    echo "#{$p['numero']} - {$p['nombre']} ({$p['equipo']})\n";
}
