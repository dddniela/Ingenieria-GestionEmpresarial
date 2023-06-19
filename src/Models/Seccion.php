<?php

require_once "Conexion.php";

class Seccion
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

    public function getObjetivo()
    {
        $cn = $this->connection;
        $sql = "SELECT * FROM tbl_seccion WHERE carreraId = " . $GLOBALS['carreraID'] . "
        AND moduloId = 2 AND titulo = 'Objetivo general' AND status = 1;";
        $objetivo = mysqli_query($this->connection, $sql);
        $objetivo = $objetivo->fetch_object();
        return $objetivo;
    }

    public function getPerfilEgreso()
    {
        $cn = $this->connection;
        $sql = "SELECT tbl_seccion.titulo, tbl_objeto.posicion, tbl_objeto.descripcion, tbl_objeto.imagen
        FROM tbl_seccion INNER JOIN tbl_carrera ON
        tbl_seccion.carreraId = tbl_carrera.carreraId
        INNER JOIN tbl_objeto ON  tbl_objeto.seccionId = tbl_seccion.seccionId
        AND tbl_objeto.status = 1
        AND tbl_carrera.carreraId = " . $GLOBALS['carreraID'] . " ORDER BY tbl_objeto.posicion ASC;";
        $objetivo = mysqli_query($this->connection, $sql);
        return $objetivo;
    }

    function imprimirDatos()
    {
        $ResultSet = $this->getPerfilEgreso();
        $tabla = "";

        if ($ResultSet->num_rows > 0) {
            while ($row = $ResultSet->fetch_assoc()) {
                $descripcion = $row['descripcion'];
                $imagen = $row['imagen'];
                $tabla .=  "<div class='col-lg-3 col-sm-6 text-center p-3'>
                                <div class='area shadow-sm p-4'>
                                    <img class='imagenArea items-center' src='$imagen' alt=''>
                                    <p class='textoArea'>$descripcion</p>
                                </div>
                            </div>";
            }
        }
        return $tabla;
    }
}
