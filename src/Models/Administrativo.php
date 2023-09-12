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

    public function getAdministrativos()
    {
        $cn = $this->connection;
        $sql = "SELECT tbl_administrativo.nombre,
        tbl_administrativo.descripcion, 
        tbl_administrativo.imagen, 
        tbl_puesto_administrativo.nombre as 'nombrePuesto',
        tbl_programa_estudio.nombre as 'nombreCarrera' FROM tbl_administrativo AS tbl_administrativo
        INNER JOIN tbl_administrativo_programa AS tbl_administrativo_programa 
        ON tbl_administrativo.administrativoId = tbl_administrativo_programa.administrativoId 
        INNER JOIN tbl_puesto_administrativo AS tbl_puesto_administrativo 
        ON tbl_administrativo.puestoId = tbl_puesto_administrativo.puestoId 
        INNER JOIN tbl_programa_estudio AS tbl_programa_estudio 
        ON tbl_administrativo_programa.programaId = tbl_programa_estudio.programaId 
        AND tbl_administrativo_programa.status = 1 
        AND tbl_administrativo_programa.programaId = " . $GLOBALS['programaId'];
        $admins = mysqli_query($this->connection, $sql);
        return $admins;
    }

    public function getJefeDepartamento()
    {
        $cn = $this->connection;
        $sql = "SELECT tbl_administrativo.nombre,
         tbl_administrativo.descripcion,
         tbl_administrativo.imagen,
         tbl_puesto_administrativo.nombre as 'nombrePuesto', 
        tbl_programa_estudio.nombre as 'nombreCarrera' FROM tbl_administrativo AS tbl_administrativo
        INNER JOIN tbl_administrativo_programa AS tbl_administrativo_programa 
        ON tbl_administrativo.administrativoId = tbl_administrativo_programa.administrativoId 
        INNER JOIN tbl_puesto_administrativo AS tbl_puesto_administrativo 
        ON tbl_administrativo.puestoId = tbl_puesto_administrativo.puestoId 
        INNER JOIN tbl_programa_estudio AS tbl_programa_estudio 
        ON tbl_administrativo_programa.programaId = tbl_programa_estudio.programaId 
        AND tbl_administrativo_programa.status = 1 
        AND tbl_administrativo_programa.programaId = " . $GLOBALS['programaId'] . "
        AND tbl_administrativo.puestoId = 1;";
        $jefeDep = mysqli_query($this->connection, $sql);
        $jefeDep = $jefeDep->fetch_object();
        return $jefeDep;
    }

    public function getCoordinador()
    {
        $cn = $this->connection;
        $sql = "SELECT tbl_administrativo.nombre,
        tbl_administrativo.descripcion,
        tbl_administrativo.imagen,
        tbl_puesto_administrativo.nombre as 'nombrePuesto', 
        tbl_programa_estudio.nombre as 'nombreCarrera' FROM tbl_administrativo AS tbl_administrativo
        INNER JOIN tbl_administrativo_programa AS tbl_administrativo_programa 
        ON tbl_administrativo.administrativoId = tbl_administrativo_programa.administrativoId 
        INNER JOIN tbl_puesto_administrativo AS tbl_puesto_administrativo 
        ON tbl_administrativo.puestoId = tbl_puesto_administrativo.puestoId 
        INNER JOIN tbl_programa_estudio AS tbl_programa_estudio 
        ON tbl_administrativo_programa.programaId = tbl_programa_estudio.programaId 
        AND tbl_administrativo_programa.status = 1 
        AND tbl_administrativo_programa.programaId = " . $GLOBALS['programaId'] . "
        AND tbl_administrativo.puestoId = 5;";
        $coordinador = mysqli_query($this->connection, $sql);
        $coordinador = $coordinador->fetch_object();
        return $coordinador;
    }
}
