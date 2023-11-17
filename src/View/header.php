<body class="">

    <!-- Menú de Gobernación -->
    <nav class="navbar navbar-expand navbar-dark bg-gob">
        <!-- Logo de Gobernación -->
        <a class="navbar-brand" href="https://www.gob.mx/" target="_blank">
            <img src="img/logo-gob.svg" alt="Gobierno de México" height="30">
        </a>
        <!-- Links -->
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText">
            <ul class="navbar-nav ml-auto d-none d-sm-flex">
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.gob.mx/gobierno" target="_blank"
                        alt="Gobierno">Gobierno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.participa.gob.mx/" target="_blank"
                        alt="Participa">Participa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://datos.gob.mx/" target="_blank" alt="Datos">Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.gob.mx/busqueda" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Logotipos de TECNM -->
    <div class="row g-0 d-none d-md-flex">
        <!-- Logo de Gobierno -->
        <div class="col align-items-start">
            <div class="row g-0 align-items-center">
                <div class="col-sm-auto">
                    <a href="https://www.gob.mx/" target="_blank">
                        <img src="img/logo-gob-mx.png" height="60" alt="Gobierno de México">
                    </a>
                </div>
                <!-- Separador -->
                <div class="col-sm-auto">
                    <img src="img/linea-vertical-separador-logos.svg" height="70" alt="separador">
                </div>
                <!-- Logo de SEP -->
                <div class="col-sm-auto">
                    <a href="https://www.gob.mx/sep" target="_blank">
                        <img src="img/logo-educacion.svg" height="60" alt="Secretaria de Educación Pública">
                    </a>
                </div>
                <!-- Separador -->
                <div class="col-sm-auto">
                    <img src="img/linea-vertical-separador-logos.svg" height="70" alt="separador">
                </div>
                <!-- Logo TECNM -->
                <div class="col-sm-auto">
                    <a href="https://www.tecnm.mx/" target="_blank">
                        <img src="img/logo-tecnm.svg" height="100" alt="TECNM">
                    </a>
                </div>
                <!-- Separador -->
                <div class="col-sm-auto">
                    <img src="img/linea-vertical-separador-logos.svg" height="70" alt="separador">
                </div>
                <!-- Logo ITVER -->
                <div class="col-sm-auto">
                    <div class="d-flex px-2 w-80 h-auto">
                        <a href="https://www.veracruz.tecnm.mx/index.php" target="_blank">
                            <img src="img/itver-logo.PNG" alt="ITVER-logo" height="60" class="ITVER">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-auto justify-content-end d-none d-xl-block">
            <div class="text-right">
                <a href="https://login.microsoftonline.com/?whr=tecnm.mx" title="Correo Institucional" target="_blank"
                    style="text-decoration: none;">
                    <img loading='lazy' height="40" src="img/encabezado/correo-icono.png" alt="Buzón">
                </a>
                <!-- Traductor -->
                <a href='?idioma=mandarin#googtrans(es|zh-CN)' class='mr-3' style="text-decoration: none;">
                    <img height="40" src='img/encabezado/china-icono.png' title='Mandarín' alt='Idioma Mandarín'>
                </a>
                <a href='?idioma=ingles#googtrans(es|en)' class='mr-3' style="text-decoration: none;">
                    <img height="40" src='img/encabezado/usa-icono.png' title='Inglés' alt='Idioma Inglés'>
                </a>
                <a href='?idioma=frances#googtrans(es|fr)' class='mr-3' style="text-decoration: none;">
                    <img height="40" src='img/encabezado/francia-icono.png' title='Francés' alt='Idioma Francés'>
                </a>
                <a href='?idioma=español#googtrans(es|es)' class='mr-3' style="text-decoration: none;">
                    <img height="40" src='img/encabezado/mexico-icono.png' title='Español' alt='Idioma Español'>
                </a>
                <a href='?idioma=coreano#googtrans(es|ko)' class='mr-3' style="text-decoration: none;">
                    <img height="40" src='img/encabezado/corea-icono.png' title='Español' alt='Idioma Español'>
                </a>

                <button class="btnCambioTexto" onclick="return cambiarTexto('+')">A+</button>
                <button class="btnCambioTexto" onclick="return cambiarTexto('-')">A-</button>
                <button class="btnCambioTexto" onclick="resetLetra()" title="Restablecer tamaño">A</button>
            </div>
        </div>
    </div>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #1B396A;">
        <div class="container-fluid">
            <!-- Botón de navegación para pantallas SM y MD -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Botones de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active hover-blue" aria-current="page" href="?option=0">Inicio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active hover-blue" href="?option=1">Perfil de Egreso</a>
                    </li>
                    <li class="nav-item hover-blue">
                        <a class="nav-link active hover-blue" href="?option=2">Plantilla Docente</a>
                    </li>
                    <li class="nav-item hover-blue">
                        <a class="nav-link active hover-blue" href="?option=3">Mapa Curricular</a>
                    </li>
                    <li class="nav-item hover-blue">
                        <a class="nav-link active hover-blue" href="?option=4">Conócenos</a>
                    </li>
                     <!-- <li class="nav-item hover-blue">
                        <a class="nav-link active hover-blue" href="?option=5">Comunidades</a>
                    </li> -->
                    <li class="nav-item hover-blue dropdown">
                        <a class="nav-link active dropdown-toggle hover-blue" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Enlaces
                        </a>
                        <ul class="dropdown-menu" style="background-color: #1B396A;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://www.tecnm.mx/">TECNM</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="http://www.veracruz.tecnm.mx/">ITVER</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://sii.veracruz.tecnm.mx/">SII</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://elearning.veracruz.tecnm.mx/">Moodle</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="http://www.veracruz.tecnm.mx/index.php/mapa-del-tecnm-veracruz">Mapa virtual
                                    3D del ITVER</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://elibro.net/es/lc/itver/login_usuario/">Biblioteca eLibro</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://www.veracruz.tecnm.mx/index.php/normateca/documentos-operativos/manuales">Manuales
                                    del ITVER</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://bit.ly/3KVYAol">Reglamento de Estudiantes del TecNM</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://www.veracruz.tecnm.mx/index.php/enlaces/articulos/347-calendario-escolar-2019">Calendario
                                    Escolar</a></li>
                            <li><a class="dropdown-item hover-blue" target="_blank"
                                    href="https://bit.ly/45uRxKV">Actividades complementarias</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>