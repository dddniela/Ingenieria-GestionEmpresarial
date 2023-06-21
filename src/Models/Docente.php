<?php

require_once "Conexion.php";

class Docente
{
    private $docenteId;
    private $carreraId;
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

    public function getImagenDocente()
    {
        return $this->urlImagen;
    }

    public function getDocentes()
    {
        $docentes = array();
        $sql = "SELECT tbl_docente.docenteId, tbl_docente.nombre, tbl_docente.descripcion, tbl_docente.informacionAcademica,
        tbl_docente.materias, tbl_docente.contacto, tbl_docente.urlImagen FROM tbl_docente AS tbl_docente
        INNER JOIN tbl_carrera_docente AS tbl_carrera_docente
        ON tbl_docente.docenteId = tbl_carrera_docente.docenteId
        AND tbl_carrera_docente.status = 1 
        AND tbl_carrera_docente.carreraId=" . $GLOBALS['carreraID'] . " WHERE tbl_docente.status = 1;";
        $docentes = mysqli_query($this->connection, $sql);
        return $docentes;
    }

    function obtenerInformacion($limiteInferior)
    {
        $cn = $this->connection;
        $stmt = $cn->prepare("SELECT tbl_docente.docenteId, tbl_docente.nombre, tbl_docente.descripcion, tbl_docente.informacionAcademica,
        tbl_docente.materias, tbl_docente.contacto, tbl_docente.urlImagen FROM tbl_docente AS tbl_docente
        INNER JOIN tbl_carrera_docente AS tbl_carrera_docente
        ON tbl_docente.docenteId = tbl_carrera_docente.docenteId
        AND tbl_carrera_docente.status = 1 
        AND tbl_carrera_docente.carreraId=" . $GLOBALS['carreraID']
            . " WHERE tbl_docente.status = 1  ORDER BY nombre ASC LIMIT ?,?");
        $limiteInferior =  $limiteInferior - 1;
        $limiteSuperior =  12;
        $stmt->bind_param('ii', $limiteInferior, $limiteSuperior);
        $stmt->execute();
        $result = $stmt->get_result();
        $docentes = $result->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    function imprimirDatos($limInferior, $limSuperior)
    {
        $docentes = $this->obtenerInformacion($limInferior);
        $codigo = "";
        $cont = 1;
        foreach ($docentes as $key => $docente) {
            $docenteId = $docente['docenteId'];
            $nombre = $docente['nombre'];
            $descripcion = $docente['descripcion'];
            $informacionAcademica = $docente['informacionAcademica'];
            $materias = $docente['materias'];
            $contacto = $docente['contacto'];
            $urlImagen = $docente['urlImagen'];
            $codigo .= "<div class='col-lg-4 col-sm-6 text-center p-3'>
                                <div class='area shadow-sm p-4 rounded-3'>
                                    <div class='d-flex flex-row justify-content-center my-1'>
                                        <img class='rounded-circle p-1 bg-primary imagen-docentes' src='img/Docentes/" . $urlImagen . "' alt=''>
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
                                                        <img class='rounded-circle p-1 bg-primary imagen-docentesModal' src='img/Docentes/" . $urlImagen . "' alt=''>
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
        $docentes = $this->getDocentes();
        $numRows = mysqli_num_rows($docentes);
        $numPaginas = $numRows / 12;
        $residuo = $numRows % 12;
        if ($residuo > 0) {
            $numPaginas = $numPaginas + 1;
        }
        $i = 1;
        $limInferior = 1;
        $limSuperior = 12;
        $paginacion = '';
        $paginacion .= '<nav aria-label="Page navigation example">';
        $paginacion .= '<ul class="pagination justify-content-center">';
        if (isset($_GET['inferior'])) {
            if ($_GET['inferior'] == 1) {
                $paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>';
            } else {
                $LI = $_GET['inferior'] - 12;
                $LS = $_GET['superior'] - 12;
                $paginacion .= '<li class="page-item"><a class="page-link" href="?option=2&inferior=' . $LI . '&superior=' . $LS . '">Anterior</a></li>';
            }
        } else {
            $paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>';
        }
        while ($i <= $numPaginas) {
            if (isset($_GET['superior'])) {
                if ($limSuperior == $_GET['superior']) {
                    $paginacion .= '<li class="page-item active"><a class="page-link" href="?option=2&inferior=' . $limInferior . '&superior=' . $limSuperior . '">' . $i . '</a></li>';
                } else {
                    $paginacion .= '<li class="page-item"><a class="page-link" href="?option=2&inferior=' . $limInferior . '&superior=' . $limSuperior . '">' . $i . '</a></li>';
                }
            } else {
                if ($i == 1) {
                    $paginacion .= '<li class="page-item active"><a class="page-link" href="?option=2&inferior=' . $limInferior . '&superior=' . $limSuperior . '">' . $i . '</a></li>';
                } else {
                    $paginacion .= '<li class="page-item"><a class="page-link" href="?option=2&inferior=' . $limInferior . '&superior=' . $limSuperior . '">' . $i . '</a></li>';
                }
            }
            $i = $i + 1;
            $limInferior = $limInferior + 12;
            $limSuperior = $limSuperior + 12;
        }
        if (isset($_GET['superior'])) {
            if ($_GET['superior'] >= $numRows) {
                $paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Siguiente</a></li>';
            } else {
                $LI = $_GET['inferior'] + 12;
                $LS = $_GET['superior'] + 12;
                $paginacion .= '<li class="page-item"><a class="page-link" href="?option=2&inferior=' . $LI . '&superior=' . $LS . '">Siguiente</a></li>';
            }
        } else {
            $paginacion .= '<li class="page-item"><a class="page-link" href="?option=2&inferior=13&superior=24">Siguiente</a></li>';
        }
        $paginacion .= '</ul>';
        $paginacion .= '</nav>';

        return $paginacion;
    }
}
