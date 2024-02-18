<?php

require_once "Conexion.php";

class Materia
{
    private $materiaId;
    private $programaId;
    private $especialidadId;
    private $nombre;
    private $area;
    private $semestre;
    private $competencia;
    private $urlVideo;
    private $urlPrograma;
    private $status;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    function icono($Area)
    {
        $ruta_img = "";
        switch ($Area) {
            case 'Calculo':
                $ruta_img = 'calculo.png';
                break;
            case 'Asignaturas Comunes':
                $ruta_img = 'asignaturas-comunes.png';
                break;
            case 'Quimica':
                $ruta_img = 'quimica.png';
                break;
            case 'Fisica':
                $ruta_img = 'fisica.png';
                break;
            case 'Software':
                $ruta_img = 'software.png';
                break;
            case 'Social':
                $ruta_img = 'social.png';
                break;
            case 'Lesgilacion':
                $ruta_img = 'legislacion.png';
                break;
            case 'Probabilidad':
                $ruta_img = 'probabilidad.png';
                break;
            case 'Empresariales':
                $ruta_img = 'empresariales.png';
                break;
            case 'Economia':
                $ruta_img = 'economia.png';
                break;
            case 'Directivas':
                $ruta_img = 'directivas.png';
                break;
            case 'Matematicas':
                $ruta_img = 'matematicas.png';
                break;
            case 'Macroeconomia':
                $ruta_img = 'macroeconomia.png';
                break;
            case 'Finanzas':
                $ruta_img = 'finanzas.png';
                break;
            case 'Procesos':
                $ruta_img = 'procesos.png';
                break;
            case 'Mercadotecnia':
                $ruta_img = 'mercadotecnia.png';
                break;
            case 'Internacionales':
                $ruta_img = 'internacionales.png';
                break;
            case 'Portuaria':
                $ruta_img = 'portuaria.png';
                break;
            case 'Gestion':
                $ruta_img = 'gestion.png';
                break;
            case 'Humano':
                $ruta_img = 'humano.png';
                break;
            case 'Contabilidad':
                $ruta_img = 'contabilidad.png';
                break;
            case 'Investigacion':
                $ruta_img = 'investigacion.png';
                break;
            case 'Legislacion':
                $ruta_img = 'legislacion.png';
                break;
            case 'Estadistica':
                $ruta_img = 'estadistica.png';
                break;
            case 'Operaciones':
                $ruta_img = 'operaciones.png';
                break;
            case 'MercElectronica':
                $ruta_img = 'mercElectronica.png';
                break;
            default:
                $ruta_img = 'asignaturas-comunes.png';
                break;
        }
        $type = pathinfo($ruta_img, PATHINFO_EXTENSION);
        $urlImagen = file_get_contents($GLOBALS['PATH_ICONO'] . $ruta_img);
        $urlImagen = 'data:image/' . $type . ';base64,' . base64_encode($urlImagen);
        return $urlImagen;
    }
    public function getMateriasBySemestre($semestre)
    {
        $url =  $GLOBALS['api'] . '/api/materia/getMateriasBySemestre';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId'],
            'semestre' => $semestre,
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

    function imprimir($semestre)
    {
        $materias = $this->getMateriasBySemestre($semestre);

        $tabla = "<div class='row justify-content-md-start justify-content-center'>";

        foreach ($materias['data'] as $materia) {
            $materiaId = $materia['materiaId'];
            $nombre = $materia['nombre'];
            $competencia = $materia['competencia'];
            $area = $materia['area'];
            $urlVideo = $materia['urlVideo'];
            $urlPrograma = $materia['urlPrograma'];
            $ruta_img = $this->icono($area);

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

        return $tabla;
    }

    function imprimir1erSemestre()
    {
        return $this->imprimir(1);
    }

    function imprimir2doSemestre()
    {
        return $this->imprimir(2);
    }

    function imprimir3erSemestre()
    {
        return $this->imprimir(3);
    }

    function imprimir4toSemestre()
    {
        return $this->imprimir(4);
    }

    function imprimir5toSemestre()
    {
        return $this->imprimir(5);
    }

    function imprimir6toSemestre()
    {
        return $this->imprimir(6);
    }

    function imprimir7moSemestre()
    {
        return $this->imprimir(7);
    }

    function imprimir8voSemestre()
    {
        return $this->imprimir(8);
    }

    function imprimir9noSemestre()
    {
        return $this->imprimir(9);
    }
}
