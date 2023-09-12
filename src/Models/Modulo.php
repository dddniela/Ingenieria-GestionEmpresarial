<?php

require_once "Conexion.php";

class Especialidad
{
    private $especialidadId;
    private $programaId;
    private $nombre;
    private $status;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function getEspecialidades()
    {
        $cn = $this->connection;
        $sqlQ = "SELECT * FROM tbl_especialidad WHERE programaId=" . $GLOBALS['programaId'] . " AND status = 1;";
        $data = $cn->query($sqlQ);
        return $data;
    }

    function icono($Area)
    {
        $ruta_img = "";
        switch ($Area) {
            case 'Sistemas Concurrentes':
                $ruta_img = 'img/iconos/concurrentes.PNG';
                break;
            case 'Distribuidas':
                $ruta_img = 'img/iconos/distribuidas.PNG';
                break;
            case 'Transacciones':
                $ruta_img = 'img/iconos/blockchain.PNG';
                break;
            default:
                $ruta_img = 'img/iconos/programacion.PNG';
                break;
        }
        return $ruta_img;
    }

    function imprimirNavPills()
    {
        $data = $this->getEspecialidades();
        $especialidades = "";
        $i = 0;

        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
                $especialidadId = $row['especialidadId'];
                $nombre = $row['nombre'];
                $selectedBool = $i == 0 ?  'true' :  'false';
                $activeBool = $i == 0 ?  'active' :  '';

                $especialidades .= "
                <li class='especial nav-item' role='presentation'>
                    <button class='especial nav-link $activeBool id='tab-especialidad$especialidadId-tab' data-bs-toggle='pill' data-bs-target='#tab-especialidad$especialidadId'
                    type='button' role='tab' aria-controls='tab-especialidad$especialidadId' aria-selected='$selectedBool'>$nombre</button>
                </li>";
                $i++;
            }
        }
        return $especialidades;
    }

    function imprimirPills()
    {
        $data = $this->getEspecialidades();
        $especialidades = "";
        $i = 0;

        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
                $especialidadId = $row['especialidadId'];
                $nombre = $row['nombre'];
                $selectedBool = $i == 0 ?  'true' :  'false';
                $activeBool = $i == 0 ?  'show active' :  '';

                $especialidades .= "
                <div class='tab-pane fade show $activeBool' id='tab-especialidad$especialidadId' role='tabpanel' aria-labelledby='tab-especialidad$especialidadId-tab'>
                <h2 class='titleDarkSection text-center font-bold my-4 d-flex d-sm-none'>$nombre</h2>
                    <div class='container'>";

                $especialidades .= $this->imprimirEspecialidad($especialidadId);

                $especialidades .= "</div>
                </div>";
                $i++;
            }
        }
        return $especialidades;
    }
}
