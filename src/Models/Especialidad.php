<?php

require_once "Conexion.php";
$carreraID = 3;

class Especialidad
{
	private $especialidadId;
	private $carreraId;
    private $nombre;
    private $status;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function getEspecialidades(){
        $cn = $this->connection;
        $sqlQ = "SELECT * FROM tbl_especialidad WHERE carreraId=" .$GLOBALS['carreraID'] ." AND status = 1;";
        $data = $cn->query($sqlQ);
        return $data;
    }


    function icono($Area){
        $ruta_img = "";
        switch($Area){
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

    function imprimirNombres(){
        $data = $this->getEspecialidades(); 
    
        $especialidades = "";
        if($data->num_rows > 0){
            while($row = $data->fetch_assoc()){
                $nombre = $row['nombre'];
                $especialidades .= "<li>$nombre</li>";
            }
        }
        return $especialidades;
    }

    function imprimirDropdown(){
        $data = $this->getEspecialidades();  
    
        $especialidades = "";
        if($data->num_rows > 0){
            while($row = $data->fetch_assoc()){
                $especialidadId = $row['especialidadId'];
                $nombre = $row['nombre'];

                $especialidades .= "<li>
                                        <a class='dropdown-item' id='tab-especialidad$especialidadId-tab' data-bs-toggle='pill'
                                            data-bs-target='#tab-especialidad$especialidadId' type='button' aria-controls='tab-especialidad$especialidadId'
                                            aria-selected='false'>$nombre</a>
                                    </li>";
            }
        }
        return $especialidades;
    }


    function imprimirNavPills(){
        $data = $this->getEspecialidades();  
        $especialidades = "";
        $i = 0;

        if($data->num_rows > 0){
            while($row = $data->fetch_assoc()){
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

    function imprimirPills(){
        $data = $this->getEspecialidades();  
        $especialidades = "";
        $i = 0;

        if($data->num_rows > 0){
            while($row = $data->fetch_assoc()){
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

    function imprimirEspecialidad($especialidadId){
        $cn = $this->connection;
        $sqlQ = "SELECT * FROM tbl_materia WHERE carreraId=" .$GLOBALS['carreraID'] ." AND especialidadId=$especialidadId  AND status = 1;;";
        $data = $cn->query($sqlQ);
    
        $tabla = "";

        if($data->num_rows > 0){
            $tabla .= "<div class='row justify-content-md-start h-100 justify-content-center'>";
            while($row = $data->fetch_assoc()){
                $materiaId = $row['materiaId'];
                $nombre = $row['nombre'];
                $competencia = $row['competencia'];
                $area = $row['area'];
                $ruta_img = $this->icono($area);
                $urlVideo = $row['urlVideo'];
                $urlPrograma = $row['urlPrograma'];

                // Cuadro de materia
                $tabla .= "<div class='col-lg-4 col-md-6 col-sm-9 col-9 p-4 h-100 justify-content-center rounded-3'>
                    <div class='row azul-medio' style='height: 88px;'>
                        <div class='d-flex justify-content-center h-100'>
                            <h5 class='text-white align-self-center rounded-top text-center font-semibold py-3'>$nombre</h5>
                        </div>
                    </div>
                    <div class='row bg-light overflow-hidden d-none d-sm-flex' style='height: 110px;'>
                        <div class='col-md-3 col-12 justify-content-center align-items-start'>
                            <div class='d-flex flex-row justify-content-center align-items-start h-100'>
                                <img class='h-16 p-1 mt-4 ms-4' src='$ruta_img' alt=''>
                            </div>
                        </div>
                        <div class='col-md-9 col-12 justify-content-center align-items-center'>
                            <div class='d-flex flex-row justify-content-center align-items-center h-100 text-wrap'>
                                <p class='text-sm mx-4 my-2' style='text-align: justify;'>$competencia</p>
                            </div>
                        </div>
                    </div>  
                    <div class='row bg-light'>
                        <div class='col-12 my-2 justify-content-center'>
                            <div class='d-flex p-2 justify-content-center align-items-center'>
                            <button type='button' class='btn btn-warning font-bold' data-bs-toggle='modal'
                                data-bs-target='#modalReticula' 
                                        data-materia ='$nombre' 
                                        data-videoMateria ='$urlVideo' 
                                        data-descMateria ='$competencia'
                                        data-urlMateria ='$urlPrograma'
                                        data-id='$materiaId'
                                        onclick='youtubePlay(this)'>
                                        Ver más </button>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
                $tabla .= "</div>";
            }
            return $tabla;
            
            $cn->close();
        }
}