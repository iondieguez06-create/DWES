<?php
declare(strict_types=1);

class Api {

    public function getDriverInfo(int $num): ?array {
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

        if ($err) {
            echo "Error en la petición: $err<br>";
            return null;
        }

        $data = json_decode($response);
        if (!$data || !isset($data[0])) {
            echo "No se encontraron datos para el piloto {$num}.<br>";
            return null;
        }

        return [
            "numero" => $num,
            "nombre" => $data[0]->full_name ?? "N/D",
            "acronimo" => $data[0]->name_acronym ?? "---",
            "equipo" => $data[0]->team_name ?? "Sin equipo"
        ];
    }
}
