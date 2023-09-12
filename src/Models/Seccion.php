<?php

require_once "Conexion.php";

class Seccion
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

    public function getObjetivo()
    {
        $cn = $this->connection;
        $sql = "SELECT titulo, descripcion FROM tbl_seccion WHERE programaId = " . $GLOBALS['programaId'] . "
        AND moduloId = 2 AND titulo = 'Objetivo general' AND status = 1;";
        $objetivo = mysqli_query($this->connection, $sql);
        $objetivo = $objetivo->fetch_object();
        return $objetivo;
    }

    public function getPerfilEgreso()
    {
        $cn = $this->connection;
        $sql = "SELECT tbl_seccion.titulo, tbl_objeto.posicion, tbl_objeto.descripcion, tbl_objeto.imagen
        FROM tbl_seccion INNER JOIN tbl_programa_estudio ON
        tbl_seccion.programaId = tbl_programa_estudio.programaId
        INNER JOIN tbl_objeto ON  tbl_objeto.seccionId = tbl_seccion.seccionId
        AND tbl_objeto.status = 1
        AND tbl_seccion.moduloId = 2
        AND tbl_seccion.titulo = 'Perfil de egreso'
        AND tbl_seccion.programaId = " . $GLOBALS['programaId'] . " ORDER BY tbl_objeto.posicion ASC;";
        $objetivo = mysqli_query($this->connection, $sql);
        return $objetivo;
    }

    public function getObjetivoEducacional()
    {
        $cn = $this->connection;
        $sql = "SELECT tbl_seccion.titulo, tbl_objeto.posicion, tbl_objeto.descripcion, tbl_objeto.imagen
        FROM tbl_seccion INNER JOIN tbl_programa_estudio ON
        tbl_seccion.programaId = tbl_programa_estudio.programaId
        INNER JOIN tbl_objeto ON  tbl_objeto.seccionId = tbl_seccion.seccionId
        AND tbl_objeto.status = 1
        AND tbl_seccion.moduloId = 2
        AND tbl_seccion.titulo = 'Objetivos educacionales'
        AND tbl_seccion.programaId = " . $GLOBALS['programaId'] . " ORDER BY tbl_objeto.posicion ASC;";
        $objetivo = mysqli_query($this->connection, $sql);
        return $objetivo;
    }

    public function imprimirPerfilEgreso()
    {
        $resultSet = $this->getPerfilEgreso();
        $tabla = "";

        if ($resultSet->num_rows > 0) {
            while ($row = $resultSet->fetch_assoc()) {
                $descripcion = $row['descripcion'];
                $imagen = $row['imagen'];
                $tabla .=  "<div class='col-lg-4 col-sm-6 text-center p-3'>
                                <div class='area shadow-sm p-4'>
                                    <img class='imagenArea items-center' src='$imagen' alt=''>
                                    <p class='textoArea'>$descripcion</p>
                                </div>
                            </div>";
            }
        }
        return $tabla;
    }

    public function imprimirObjetivosEducacionales()
    {
        $resultSet = $this->getObjetivoEducacional();
        $tabla = "";

        if ($resultSet->num_rows > 0) {
            while ($row = $resultSet->fetch_assoc()) {
                $descripcion = $row['descripcion'];
                $imagen = $row['imagen'];
                $tabla .= "<div class='col-lg-6 col-sm-6 text-start p-3'>
                            <div class='area shadow-sm p-4'>
                                <img class='my-4 mx-4' style='float: left;' src='$imagen' alt='' height='60px'>
                                    <p class='textoArea' style='text-align: justify;'>
                                    $descripcion 
                                    </p>
                                </div>
                            </div>";
            }
        }
        return $tabla;
    }
}