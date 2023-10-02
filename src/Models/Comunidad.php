<?php

require_once "Conexion.php";

class Comunidad
{
    private $comunidadId;
    private $programaId;
    private $nombre;
    private $logo;
    private $quienesSomos;
    private $queHacemos;
    private $fotosComunidad;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function setId($comunidadId)
    {
        $this->comunidadId = $comunidadId;
    }

    public function getId()
    {
        return $this->comunidadId;
    }

    public function setNombreComunidad($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombreComunidad()
    {
        return $this->nombre;
    }

    public function setLogoComunidad($logo)
    {
        $this->logo = $logo;
    }

    public function getLogoComunidad()
    {
        return $this->logo;
    }

    public function setQuienesSomosComunidad($quienesSomos)
    {
        $this->quienesSomos = $quienesSomos;
    }

    public function getQuienesSomosComunidad()
    {
        return $this->quienesSomos;
    }

    public function setqueHacemosComunidad($queHacemos)
    {
        $this->queHacemos = $queHacemos;
    }

    public function getqueHacemosComunidad()
    {
        return $this->queHacemos;
    }

    public function getComunidades()
    {
        $url =  $GLOBALS['api'] . '/api/comunidad/getComunidadByProgramaId?programaId=' . $GLOBALS['programaId'];

        $headers = ['Content-Type: application/json'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    function imprimirDatos()
    {
        $comunidades = $this->getComunidades();
        $tabla = "";

        foreach ($comunidades['data'] as $comunidad) {
            $comunidadId = $comunidad['comunidadId'];
            $nombre = $comunidad['nombre'];
            $logo = $comunidad['logo'];
            $quienesSomos = $comunidad['quienesSomos'];
            $queHacemos = $comunidad['queHacemos'];
            $fotosComunidad = $comunidad['fotosComunidad'];
            $array = explode(',', $fotosComunidad);
            $num = count($array);
            $tabla .=  "<div class='col-lg-4 col-sm-6 text-center p-3'>
                                <div class='area shadow-sm p-4 rounded-3'>
                                    <div class='d-flex flex-row justify-content-center my-1'>
                                        <img class='rounded-circle p-1 bg-primary imagen-docentes' src='" . $GLOBALS['PATH_COMUNIDAD'] . "$nombre/$logo' alt=''>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center'>
                                        <h3 class='tituloAreaDocente text-center font-bold text-xl'>$nombre</h3>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center'>
                                        <button type='button' class='btn btn-warning font-bold' data-bs-toggle='modal' data-bs-target='#ModalComunidad" . $comunidadId . "'>Ver mas</button>
                                    </div>
                                </div>
                            </div>";

            $tabla .=   "<div class='modal fade' id='ModalComunidad$comunidadId' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-lg'>
                                    <div class='modal-content'>

                                        <div class='modal-header azul-medio'>
                                            <h5 class='modal-title text-white font-semibold'>Información comunidad</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>

                                        <div class='modal-body'>
                                            <div class='col'>
                                                <div class='row justify-content-center m-2'>
                                                    <div class='col-7 col-lg-auto justify-content-center m-2'>
                                                        <div class='d-flex justify-content-center'>
                                                            <img class='rounded-circle p-1 bg-primary imagen-docentesModal' src='" . $GLOBALS['PATH_COMUNIDAD'] . "$nombre/$logo' alt=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-12 col-lg-7 justify-content-center align-items-center m-2'>
                                                        <div class='d-flex align-items-center h-100'>
                                                            <div class='col'>
                                                                <div class='row'>
                                                                    <h1 class='amarillo text-center py-2 fs-4 font-semibold'>$nombre</h1> 
                                                                </div>      
                                                                <div class='row'>
                                                                    <p class='text-dark' style='text-align: justify;'>$quienesSomos</p>
                                                                </div>     
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='d-flex flex-row justify-content-start m-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    <div class='row'>
                                                        <h1 class='amarillo text-center py-2 fs-4 font-semibold'>¿Que hacemos?</h1> 
                                                    </div> 
                                                    $queHacemos
                                                </div> 
                                            </div>";
            if (count($array) != 1) {
                $foto1 = count($array) != 0 ? $array[0] : 0;
                $foto2 = count($array) != 0 ? $array[1] : 0;
                $tabla .=  "<div class='d-flex flex-row justify-content-start m-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <img class='img-normalizada shadow-1-strong rounded mb-4' src='" . $GLOBALS['PATH_COMUNIDAD'] . "$nombre/$foto1' alt='' />  
                                                        </div>     
                                                        <div class='col-lg-6'>
                                                        <img class='img-normalizada shadow-1-strong rounded mb-4' src='" . $GLOBALS['PATH_COMUNIDAD'] . "$nombre/$foto2' alt='' />  
                                                        </div>
                                                    </div> 
                                                </div> 
                                            </div>";
            }
            $tabla .=   "</div>
                                    </div>
                                </div>
                            </div>";
        }

        return $tabla;
    }
}
