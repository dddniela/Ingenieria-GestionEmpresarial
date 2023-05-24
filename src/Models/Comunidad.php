<?php

require_once "Conexion.php";

class Comunidad
{
    private $id_comunidad;
    private $nombre_comunidad;
    private $logo_comunidad;
    private $quienesSomos_comunidad;
    private $queHacemos_comunidad;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function setId($id_comunidad)
    {
        $this->id_comunidad = $id_comunidad;
    }

    public function getId()
    {
        return $this->id_comunidad;
    }

    public function setNombreComunidad($nombre_comunidad)
    {
        $this->nombre_comunidad = $nombre_comunidad;
    }

    public function getNombreComunidad()
    {
        return $this->nombre_comunidad;
    }

    public function setLogoComunidad($logo_comunidad)
    {
        $this->logo_comunidad = $logo_comunidad;
    }

    public function getLogoComunidad()
    {
        return $this->logo_comunidad;
    }

    public function setQuienesSomosComunidad($quienesSomos_comunidad)
    {
        $this->quienesSomos_comunidad = $quienesSomos_comunidad;
    }

    public function getQuienesSomosComunidad()
    {
        return $this->quienesSomos_comunidad;
    }

    public function setQueHacemosComunidad($queHacemos_comunidad)
    {
        $this->queHacemos_comunidad = $queHacemos_comunidad;
    }

    public function getQueHacemosComunidad()
    {
        return $this->queHacemos_comunidad;
    }

    public function getComunidades(){
        $docentes = array();
        $sql = 'SELECT * FROM comunidad ORDER BY nombre_comunidad ASC';
        $comunidades = mysqli_query($this->connection,$sql);
        return $comunidades;
    }

    function obtenerInformacion(){
        $cn = $this->connection;
        $sql = 'SELECT * FROM comunidad ORDER BY nombre_comunidad ASC';
        $comunidades = mysqli_query($this->connection,$sql);
        return $comunidades;
    }

    function imprimirDatos(){
        $ResultSet = $this->obtenerInformacion();
        $tabla = "";
            
        if($ResultSet->num_rows > 0){
            while($row = $ResultSet->fetch_assoc()){
                $id_comunidad = $row['id_comunidad'];
                $nombre_comunidad = $row['nombre_comunidad'];
                $logo_comunidad = $row['logo_comunidad'];
                $quienesSomos_comunidad = $row['quienesSomos_comunidad'];
                $queHacemos_comunidad = $row['queHacemos_comunidad'];
                $fotosComunidad = $row['fotosComunidad'];
                $array = explode ( ',', $fotosComunidad );
                $num = count($array);
                $tabla .=  "<div class='col-lg-4 col-sm-6 text-center p-3'>
                                <div class='area shadow-sm p-4 rounded-3'>
                                    <div class='d-flex flex-row justify-content-center my-1'>
                                        <img class='rounded-circle p-1 bg-primary imagen-docentes' src='img/Comunidades/$logo_comunidad' alt=''>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center'>
                                        <h3 class='tituloAreaDocente text-center font-bold text-xl'>$nombre_comunidad</h3>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center'>
                                        <button type='button' class='btn btn-warning font-bold' data-bs-toggle='modal' data-bs-target='#ModalComunidad".$id_comunidad."'>Ver mas</button>
                                    </div>
                                </div>
                            </div>";                        
                
                $tabla .=   "<div class='modal fade' id='ModalComunidad$id_comunidad' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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
                                                            <img class='rounded-circle p-1 bg-primary imagen-docentesModal' src='img/Comunidades/$logo_comunidad' alt=''>
                                                        </div>
                                                    </div>
                                                    <div class='col-12 col-lg-7 justify-content-center align-items-center m-2'>
                                                        <div class='d-flex align-items-center h-100'>
                                                            <div class='col'>
                                                                <div class='row'>
                                                                    <h1 class='amarillo text-center py-2 fs-4 font-semibold'>$nombre_comunidad</h1> 
                                                                </div>      
                                                                <div class='row'>
                                                                    <p class='text-dark' style='text-align: justify;'>$quienesSomos_comunidad</p>
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
                                                    $queHacemos_comunidad
                                                </div> 
                                            </div>";
                        if(count($array) != 1 ){
                                $foto1 = count($array) != 0 ? $array[0] : 0;
                                $foto2 = count($array) != 0 ? $array[1] : 0;
                                $tabla .=  "<div class='d-flex flex-row justify-content-start m-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <img class='img-normalizada shadow-1-strong rounded mb-4' src='img/Comunidades/$foto1' alt='' />  
                                                        </div>     
                                                        <div class='col-lg-6'>
                                                            <img class='img-normalizada shadow-1-strong rounded mb-4' src='img/Comunidades/$foto2' alt='' />  
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
        }
        return $tabla;
    }
}

//IMG_3878.webp
//IMG_1110.webp