<?php

require_once "Conexion.php";

class Administrativo
{
    private $administrativoId;
    private $puestoId;
    private $nombre;
    private $descripcion;
    private $imagen;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function getAdministrativo($puestoId)
    {
        $url =  $GLOBALS['api'] . '/api/administrativo/getAdministrativo';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId'],
            'puestoId' => $puestoId
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    public function getJefeDepartamento()
    {
        $jefeDep = $this->getAdministrativo(1);
        return $jefeDep['data'];
    }

    public function getCoordinador()
    {
        $coordinador = $this->getAdministrativo(5);
        return $coordinador['data'];
    }
}
