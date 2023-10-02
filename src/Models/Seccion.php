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
        $url =  $GLOBALS['api'] . '/api/seccion/getObjetivoGeneralByProgramaId';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId']
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

    public function getPerfilEgreso()
    {
        $url =  $GLOBALS['api'] . '/api/seccion/getPerfilEgresoByProgramaId';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId']
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

    public function getObjetivoEducacional()
    {
        $url =  $GLOBALS['api'] . '/api/seccion/getObjetivoEducacionalByProgramaId';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId']
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

    public function getReticula()
    {
        $url =  $GLOBALS['api'] . '/api/seccion/getReticulaByProgramaId';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId']
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


    public function imprimirBotonReticula()
    {
        $reticula = $this->getReticula();
        $reticula = $reticula['data'];

        $url = $reticula['url'];

        $boton = '';
        if ($reticula) {
            $boton .=  "<p>
                <a class='btn-warning w-auto btn font-bold' target='_blank'
                href='$url'>Ver plan de estudio</a>
                </p>";
        }
        return $boton;
    }

    public function imprimirPerfilEgreso()
    {
        $perfilEgreso = $this->getPerfilEgreso();
        $perfilEgreso = $perfilEgreso['data'];

        $tabla = "";
        foreach ($perfilEgreso['objeto'] as $punto) {
            $descripcion = $punto['descripcion'];
            $imagen = $punto['imagen'];
            $tabla .=  "<div class='col-lg-4 col-sm-6 text-center p-3'>
                            <div class='area shadow-sm p-4'>
                                <img class='imagenArea items-center' src='$imagen' alt=''>
                                <p class='textoArea'>$descripcion</p>
                            </div>
                        </div>";
        }
        return $tabla;
    }

    public function imprimirObjetivosEducacionales()
    {
        $objetivosEducacionales = $this->getObjetivoEducacional();
        $objetivosEducacionales = $objetivosEducacionales['data'];

        $tabla = "";
        foreach ($objetivosEducacionales['objeto'] as $objetivo) {
            $descripcion = $objetivo['descripcion'];
            $imagen = $objetivo['imagen'];
            $tabla .= "<div class='col-lg-6 col-sm-6 text-start p-3'>
                            <div class='row g-0 area shadow-sm p-4'>
                                <div class='col-lg-3 col-12 d-flex flex-row justify-content-center align-items-center'>
                                    <img class='m-3' style='float: left;' src='$imagen' alt='' height='60px'>
                                </div>
                                <div class='col-lg-9 col-12 justify-content-center'>
                                    <p class='textoArea' style='text-align: justify;'>
                                    $descripcion 
                                    </p>
                                </div>
                            </div>
                        </div>";
        }

        return $tabla;
    }


    public function getPerfilIng()
    {
        $cn = $this->connection;
        $sql = "SELECT titulo, descripcion FROM tbl_seccion WHERE programaId = " . $GLOBALS['programaId'] . "
        AND moduloId = 2 AND titulo = 'Perfil de Ingreso' AND status = 1;";
        $objetivo = mysqli_query($this->connection, $sql);
        $objetivo = $objetivo->fetch_object();
        return $objetivo;
    }


    public function getPerfilIngreso()
    {
        $cn = $this->connection;
        $sql = "SELECT tbl_seccion.titulo, tbl_objeto.posicion, tbl_objeto.descripcion, tbl_objeto.imagen
        FROM tbl_seccion INNER JOIN tbl_programa_estudio ON
        tbl_seccion.programaId = tbl_programa_estudio.programaId
        INNER JOIN tbl_objeto ON  tbl_objeto.seccionId = tbl_seccion.seccionId
        AND tbl_objeto.status = 1
        AND tbl_seccion.moduloId = 2
        AND tbl_seccion.titulo = 'Perfil de Ingreso'
        AND tbl_seccion.programaId = " . $GLOBALS['programaId'] . " ORDER BY tbl_objeto.posicion ASC;";
        $objetivo = mysqli_query($this->connection, $sql);
        return $objetivo;
    }


    public function imprimirPerfilIngreso()
    {
        $resultSet = $this->getPerfilIngreso();
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
}