<?php

require_once "Conexion.php";

class Docente
{
    private $docenteId;
    private $programaId;
    private $nombre;
    private $descripcion;
    private $informacionAcademica;
    private $materias;
    private $contacto;
    private $urlImagen;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function setId($docenteId)
    {
        $this->docenteId = $docenteId;
    }

    public function getId()
    {
        return $this->docenteId;
    }

    public function setNombreDocente($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombreDocente()
    {
        return $this->nombre;
    }

    public function setPalabrasDocente($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getPalabrasDocente()
    {
        return $this->descripcion;
    }

    public function setInformacionDocente($informacionAcademica)
    {
        $this->informacionAcademica = $informacionAcademica;
    }

    public function getInformacionDocente()
    {
        return $this->informacionAcademica;
    }

    public function setMateriasDocente($materias)
    {
        $this->materias = $materias;
    }

    public function getMateriasDocente()
    {
        return $this->materias;
    }

    public function setContactoDocente($contacto)
    {
        $this->contacto = $contacto;
    }

    public function getContactoDocente()
    {
        return $this->contacto;
    }

    public function setImagenDocente($urlImagen)
    {
        $this->urlImagen = $urlImagen;
    }

    public function getImagenDocente($filename)
    {
        return $this->urlImagen;
    }

    public static function getDocentes($limiteInferior, $limiteSuperior)
    {
        $url =  $GLOBALS['api'] . '/api/docente/getDocentesByprogramaId';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId'],
            'offset' => $limiteInferior ? (int)$limiteInferior : null,
            'limit' => $limiteSuperior ? $limiteSuperior : null
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

    function imprimirDatos($limInferior)
    {
        $docentes = $this->getDocentes($limInferior, 12);
        $codigo = "";

        foreach ($docentes['data'] as $docente) {
            $docenteId = $docente['docenteId'];
            $nombre = $docente['nombre'];
            $descripcion = $docente['descripcion'];
            $informacionAcademica = $docente['informacionAcademica'];
            $materias = $docente['materias'];
            $contacto = $docente['contacto'];
            $urlImagen = $GLOBALS['PATH_DOCENTE'] . $docente['urlImagen'];

            $codigo .= "<div class='col-lg-4 col-sm-6 text-center p-3'>
                                <div class='area shadow-sm p-4 rounded-3'>
                                    <div class='d-flex flex-row justify-content-center my-1'>
                                        <img class='rounded-circle p-1 bg-primary imagen-docentes' src='" . $urlImagen . "' alt=''>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center'>
                                        <h3 class='tituloAreaDocente text-center font-bold text-xl'>$nombre</h3>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center'>
                                        <button type='button' class='btn btn-warning font-bold' data-bs-toggle='modal' data-bs-target='#ModalDocente" . $docenteId . "'>Ver más</button>
                                    </div>
                                </div>
                            </div>";

            $codigo .= "<div class='modal fade' id='ModalDocente" . $docenteId . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-lg'>
                                    <div class='modal-content'>
                                        <div class='modal-header azul-medio'>
                                            <h5 class='modal-title text-white font-semibold'>Información docente</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body'>
                                            <div class='col'>
                                            <div class='row justify-content-center m-2'>
                                                <div class='col-7 col-lg-auto justify-content-center m-2'>
                                                    <div class='d-flex justify-content-center'>
                                                        <img class='rounded-circle p-1 bg-primary imagen-docentesModal' src='" . $urlImagen . "' alt=''>
                                                    </div>
                                                </div>
                                                <div class='col-12 col-lg-7 justify-content-center align-items-center m-2'>
                                                    <div class='d-flex align-items-center h-100'>
                                                        <div class='col'>
                                                            <div class='row'>
                                                                <h1 class='amarillo text-center py-2 fs-4 font-semibold'>$nombre</h1> 
                                                            </div>      
                                                            <div class='row'>
                                                                <p class='text-dark' style='text-align: justify;'>$descripcion</p>
                                                            </div>     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class='d-flex flex-row justify-content-start m-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    <strong>Información académica:</strong> <br>
                                                    $informacionAcademica
                                                </div> 
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2' style='text-align: justify;'>
                                                <strong>Materias que ha impartido:</strong>
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2 mb-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    $materias
                                                </div>   
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2' style='text-align: justify;'>
                                                <strong>Información de contacto:</strong> 
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2 mb-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    $contacto
                                                </div>   
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
        }
        return $codigo;
    }

    function generarPaginacion()
    {
        $docentes = $this->getDocentes(null, null);
        $docentesPorPagina = 12;
        $numRows = $docentes['count'];
        $numPaginas = ceil($numRows / $docentesPorPagina);
        $currentPage = isset($_GET['inferior']) ? (int)$_GET['inferior'] / $docentesPorPagina + 1 : 1;

        $paginacion = '<nav><ul class="pagination justify-content-center">';

        // Botón "Anterior"
        if ($currentPage > 1) {
            $prevPage = ($currentPage - 2) * $docentesPorPagina;
            $paginacion .= '<li class="page-item"><a class="page-link" href="?option=2&inferior=' . $prevPage . '">Anterior</a></li>';
        } else {
            $paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>';
        }

        // Enlaces de páginas
        for ($i = 1; $i <= $numPaginas; $i++) {
            $pageStart = ($i - 1) * $docentesPorPagina;
            $activeClass = $currentPage === $i ? 'active' : '';
            $paginacion .= '<li class="page-item ' . $activeClass . '"><a class="page-link" href="?option=2&inferior=' . $pageStart . '">' . $i . '</a></li>';
        }

        // Botón "Siguiente"
        if ($currentPage < $numPaginas) {
            $nextPage = $currentPage * $docentesPorPagina;
            $paginacion .= '<li class="page-item"><a class="page-link" href="?option=2&inferior=' . $nextPage . '">Siguiente</a></li>';
        } else {
            $paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Siguiente</a></li>';
        }

        $paginacion .= '</ul></nav>';

        return $paginacion;
    }
}
