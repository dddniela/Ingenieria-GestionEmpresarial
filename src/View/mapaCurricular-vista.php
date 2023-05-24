<div class="row g-0">
    <div class="position-relative w-100 overflow-hidden">
        <img class="w-100 img-fluid" src="img/IMG_3884.webp" alt="">
        <div class="position-absolute top-50 start-50 translate-middle w-100">
            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                <h1 class="fw-bold text-warning">Mapa Curricular</h1>
                <h1 class="fw-bold text-light d-md-flex d-none">Ingeniería Química</h1>
            </div>
        </div>
    </div>
</div>

<!-- Mapa curricular -->
<div class="w-full">
    <h2 class="text-center text-warning font-bold bg-primary text-2xl py-2">Retícula de Materias</h2>
    <ul class="nav nav-pills justify-content-center mb-3 d-flex d-sm-none" id="pills-tab" role="tablist">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Selecciona el semestre</a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" id="tab-semestre1-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre1" type="button" aria-controls="tab-semestre1"
                        aria-selected="false">1er Semestre</a>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre2-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre2" type="button" aria-controls="tab-semestre2"
                        aria-selected="false">2do Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre3-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre3" type="button" aria-controls="tab-semestre3"
                        aria-selected="false">3er Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre4-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre4" type="button" aria-controls="tab-semestre4"
                        aria-selected="false">4to Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre5-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre5" type="button" aria-controls="tab-semestre5"
                        aria-selected="false">5to Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre6-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre6" type="button" aria-controls="tab-semestre6"
                        aria-selected="false">6to Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre7-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre7" type="button" aria-controls="tab-semestre7"
                        aria-selected="false">7mo Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre8-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre8" type="button" aria-controls="tab-semestre8"
                        aria-selected="false">8vo Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre9-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre9" type="button" aria-controls="tab-semestre9"
                        aria-selected="false">9no Semestre</button>
                </li>
            </ul>
        </li>
    </ul>

    <ul class="nav nav-pills justify-content-center mb-3 d-none d-sm-flex" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-semestre1-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre1"
                type="button" role="tab" aria-controls="tab-semestre1" aria-selected="true">1er Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre2-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre2"
                type="button" role="tab" aria-controls="tab-semestre2" aria-selected="false">2do Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre3-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre3"
                type="button" role="tab" aria-controls="tab-semestre3" aria-selected="false">3er Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre4-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre4"
                type="button" role="tab" aria-controls="tab-semestre4" aria-selected="false">4to Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre5-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre5"
                type="button" role="tab" aria-controls="tab-semestre5" aria-selected="false">5to Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre6-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre6"
                type="button" role="tab" aria-controls="tab-semestre6" aria-selected="false">6to Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre7-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre7"
                type="button" role="tab" aria-controls="tab-semestre7" aria-selected="false">7mo Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre8-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre8"
                type="button" role="tab" aria-controls="tab-semestre8" aria-selected="false">8vo Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre9-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre9"
                type="button" role="tab" aria-controls="tab-semestre9" aria-selected="false">9no Semestre</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tab-semestre1" role="tabpanel" aria-labelledby="tab-semestre1-tab">
            <div class="container">
                <?php

                echo $materia->imprimir1erSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre2" role="tabpanel" aria-labelledby="tab-semestre2-tab">
            <div class="container">
                <?php

                echo $materia->imprimir2doSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre3" role="tabpanel" aria-labelledby="tab-semestre3-tab">
            <div class="container">
                <?php

                echo $materia->imprimir3erSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre4" role="tabpanel" aria-labelledby="tab-semestre4-tab">
            <div class="container">
                <?php

                echo $materia->imprimir4toSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre5" role="tabpanel" aria-labelledby="tab-semestre5-tab">
            <div class="container">
                <?php

                echo $materia->imprimir5toSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre6" role="tabpanel" aria-labelledby="tab-semestre6-tab">
            <div class="container">
                <?php

                echo $materia->imprimir6toSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre7" role="tabpanel" aria-labelledby="tab-semestre7-tab">
            <div class="container">
                <?php

                echo $materia->imprimir7moSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre8" role="tabpanel" aria-labelledby="tab-semestre8-tab">
            <div class="container">
                <?php

                echo $materia->imprimir8voSemestre();

                ?>
            </div>

        </div>
        <div class="tab-pane fade" id="tab-semestre9" role="tabpanel" aria-labelledby="tab-semestre9-tab">
            <div class="container">
                <?php

                echo $materia->imprimir9noSemestre();

                ?>
            </div>
        </div>
    </div>

    <div class='modal fade' id='modalReticula' tabindex='-1' aria-labelledby='modalReticula' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header azul-medio'>
                    <h5 class='modal-title text-white font-semibold' id='modalTitulo'></h5>
                    <button type='button' class='btn-close text-white' data-bs-dismiss='modal'
                        aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <div class='d-flex justify-content-center mb-4' style='text-align: justify;'>
                        <p id="descReticula"></p>
                    </div>
                    <div class='d-flex justify-content-center my-2'>
                        <iframe class='aspect-video video-reticula' id='videoReticula' src=''
                            title='YouTube video player' frameborder='0'
                            allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class='d-flex p-2 justify-content-center align-items-center'>
                        <a target='_blank' href='' id="urlReticula"><button type='button'
                                class='btn btn-warning font-bold'>Descargar programa</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="justify-content-center text-center">
        <p><a class="btn-warning w-auto btn font-bold" target="_blank" href="https://bit.ly/3XZfkOu">Descargar
                Retícula</a></p>
    </div>

</div>
<!-- Fin Mapa curricular -->

<!-- Especialidad -->
<div class="bg-primary pt-5">
    <section class="darkSection bg-dark">
        <div class="row px-2 g-0">

            <div class="col-lg-6 col-12 p-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="titleDarkSection text-center font-bold m-3" id="Especialidad">Especialidad</h2>
                            <div class="darkSectionSeparator"></div>
                        </div>
                        <div class="col-12" style="text-align: center;">
                            <p class="text-light" style="text-align: justify;">
                                La especialidad es el espacio dentro del plan de estudios, constituido por un conjunto
                                de
                                asignaturas diseñadas para la formación y desarrollo de competencias, que complementan
                                la formación
                                profesional de los estudiantes de las instituciones adscritas al Tecnológico Nacional de
                                México.
                            </p>
                            <h5 class="font-bold text-warning" style="text-align: justify">Especialidades que han
                                existido:</h5>
                            <div class="bg-dark">
                                <ul class="m-3 text-light font-bold" style="text-align: justify">
                                    <?php
                                        echo $especialidad->imprimirNombres();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 p-2 shadow-sm">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <img class="img-fluid rounded" src="img/IMG-1234.webp" alt="">
                </div>
            </div>

        </div>
    </section>

    <div class="w-full darkSection bg-dark">
        <ul class="nav nav-pills nav-fill justify-content-center mb-3 d-flex d-sm-none" id="pills-tab" role="tablist">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false">Selecciona la especialidad</a>
                <ul class="dropdown-menu">
                    <?php
                        echo $especialidad->imprimirDropdown();
                    ?>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-pills nav-fill justify-content-center mx-5 d-none d-sm-flex" id="pills-tab" role="tablist">
            <?php
                echo $especialidad->imprimirNavPills();
            ?>
        </ul>
       
        <div class="tab-content" id="pills-tabContent">
            <?php
                echo $especialidad->imprimirPills();
            ?>
        </div>
</div>

</div>
<!-- Fin Especialidad -->

<!-- Desarrollo profesional -->
<div class="bg-primary pt-5">
    <section class="lightSection bg-light">
        <div class="row px-2 g-0">

            <div class="col-lg-6 col-12 p-2 shadow-sm">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <img class="img-fluid rounded" src="img/IMG_4446.webp" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-12 p-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="sectionTitle text-center font-bold m-3">Desarrollo profesional</h2>
                            <div class="sectionSeparator"></div>
                        </div>
                        <div class="col-12" style="text-align: center;">
                            <p style="text-align: justify;"> El plan de estudios de la carrera de ingeniería en sistemas
                                computacionales ofrece
                                un desarrollo integral y profesional con el objetivo de que el estudiante se pueda
                                desenvolver en diferentes áreas
                                de la tecnología, ofreciendo soluciones óptimas e innovadoras.
                            </p>
                            <h5 class="font-bold" style="text-align: justify">Trayectoria del alumno:</h5>
                            <div class="bg-light">
                                <ul class="my-3 font-bold" style="text-align: justify">
                                    <li>Actividades complementarias</li>
                                    <li>Servicio Social</li>
                                    <li>Residencia profesional</li>
                                    <li>Tutorías</li>
                                    <li>Cursos de Verano</li>
                                    <li>Titulación profesional</li>
                                    <li>Liberación de segunda lengua</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<!--Fin Desarrollo profesional -->

<!-- Actividades complementarias -->
<div class="bg-primary pt-5">
    <section class="bg-light">
        <div class="row px-2 g-0">

            <div class="col-lg-6 col-12 p-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="sectionTitle text-center font-bold m-3">Actividades complementarias</h2>
                            <div class="sectionSeparator"></div>
                        </div>
                        <div class="col-12" style="text-align: center;">
                            <h2 class="text-center text-primary font-bold text-xl">"No solo se trata de aprender, sino
                                de crecer profesionalmente"</h2>
                            <p class="text-dark" style="text-align: justify;">
                                Las actividades complementarias son todas aquellas actividades que
                                realiza el estudiante en beneficio de su formación integral con el objetivo de
                                complementar su desarrollo
                                de competencia profesionales.
                                <br><br>
                                Las actividades complementarias pueden ser: tutorías, actividades extraescolares,
                                proyectos de investigación o
                                integradores, participación en eventos académicos, productividad laboral,
                                emprendedurismo, fomento a la cultura,
                                construcción de prototipos y desarrollo tecnológico, conservación al medio ambiente,
                                fomento a la cultura,
                                entre otras.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 p-2 shadow-sm">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <img class="img-fluid rounded" src="img/ITVER-10.webp" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
<!--Fin Actividades complementarias -->

<!-- Servicio social -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
    <div class="row px-2 g-0">

        <div class="col-lg-6 col-12 p-2 shadow-sm">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <img class="img-fluid rounded" src="img/gestionVinculacion.webp" alt="">
            </div>
        </div>

        <div class="col-lg-6 col-12 p-4">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="row g-0">
                    <div class="col-12">
                        <h2 class="sectionTitle text-center font-bold m-3">Servicio social</h2>
                        <div class="sectionSeparator"></div>
                    </div>
                    <div class="col-12" style="text-align: center;">
                        <p style="text-align: justify;"> Se entiende por servicio social al trabajo de carácter temporal
                            y obligatorio, que
                            institucionalmente prestan y ejecutan los estudiantes en beneficio de la sociedad. Los
                            estudiantes de las instituciones
                            adscritas al TecNM prestan el servicio social para cumplir con los créditos de sus planes de
                            estudio.
                        </p>
                        <h5 class="font-bold" style="text-align: justify">Requisitos para cursar el servicio social:
                        </h5>
                        <div class="bg-light">
                            <ul class="my-3 font-bold" style="text-align: justify">
                                <li>Tener acreditadas las actividades complementarias.</li>
                                <li>Tener aprobado al menos el 70% de créditos del plan de estudios.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Fin Servicio social -->

<!-- Residencias profesionales -->
<div class="bg-primary pt-5">
    <img src="img/IMG_0337.webp" class="w-full" alt="">
    <section class="darkSection bg-dark">
        <div class="row px-2 g-0">
            <div class="col-lg-12 col-12 py-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="titleDarkSection text-center font-bold m-3">Residencias profesionales</h2>
                            <div class="darkSectionSeparator"></div>
                        </div>
                        <div class="col-12 px-4" style="text-align: center;">
                            <p class="text-light" style="text-align: justify;">
                                Las residencias profesionales permiten al estudiante emprender un proyecto
                                teórico-práctico, analítico,
                                reflexivo, crítico y profesional, con el propósito de resolver un problema específico de
                                la realidad
                                social y productiva, para fortalecer y aplicar sus competencias obtenidas a lo largo de
                                cada una de sus
                                asignaturas cursadas. La cual se puede realizar de manera individual, grupal o
                                interdisciplinaria;
                                dependiendo de los requerimientos, condiciones y características del proyecto de la
                                empresa, organismo o
                                dependencia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lightSection bg-light p-2">
        <h5 class="font-bold text-dark py-4" style="text-align: center">Objetivos de las residencias profesionales</h5>
        <div class="row g-0">

            <div class="col-lg-4 col-sm-6 text-center p-3">
                <div class="area shadow-sm p-4">
                    <img class="areaImage items-center" src="img/icon1.PNG" alt="">
                    <h3 class="areaTitle text-center font-bold text-xl">Proyectos</h3>
                    <p class="areaText">Contribuir a la formación integral del alumno a través de la interrelación de
                        conocimientos teóricos y aspectos prácticos de la profesión.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 text-center p-3">
                <div class="area shadow-sm p-4">
                    <img class="areaImage items-center" src="img/icon2.PNG" alt="">
                    <h3 class="areaTitle text-center font-bold text-xl">Valores</h3>
                    <p class="areaText">Promover valores profesionales, humanísticos y éticos en la formación integral
                        del
                        estudiante.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 text-center p-3">
                <div class="area shadow-sm p-4">
                    <img class="areaImage items-center" src="img/icon3.PNG" alt="">
                    <h3 class="areaTitle text-center font-bold text-xl">Experiencia</h3>
                    <p class="areaText">Desarrollar habilidades y competencias para diagnosticar, planear, ejecutar y
                        evaluar
                        actividades de la profesión, de conformidad con el perfil de egreso.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="lightSection bg-light">
        <div class="row px-2 g-0">

            <div class="col-lg-6 col-12 p-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="sectionTitle text-center font-bold m-3">Requisitos para cursar residencias
                                profesionales</h2>
                            <div class="sectionSeparator"></div>
                        </div>
                        <div class="col-12" style="text-align: center;">
                            <p class="text-dark" style="text-align: justify;">
                                El valor curricular para la residencia profesional es de 10 créditos, y su duración
                                queda
                                determinada por un periodo de 4 meses como tiempo mínimo y 6 meses como tiempo máximo,
                                debiendo
                                acumularse 500 horas.
                            </p>
                        </div>
                        <div class="bg-light">
                            <ul class="my-3 font-bold" style="text-align: justify">
                                <li>Tener acreditadas las actividades complementarias.</li>
                                <li>Tener acreditado el servicio social.</li>
                                <li>Tener aprobado al menos el 80% de créditos del plan de estudios.</li>
                                <li>No contar con ninguna asignatura en condición de "curso especial".</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 p-2 shadow-sm">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <img class="img-fluid rounded" src="img/gestionVinculacion.webp" alt="">
                </div>
            </div>

        </div>
    </section>
</div>
<!-- Fin Residencias Profesionales -->

<!-- Tutorías -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
    <div class="row px-2 g-0">

        <div class="col-lg-6 col-12 p-2 shadow-sm">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <img class="img-fluid rounded" src="img/IMG_1245.webp" alt="">
            </div>
        </div>

        <div class="col-lg-6 col-12 p-4">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="row g-0">
                    <div class="col-12">
                        <h2 class="sectionTitle text-center font-bold m-3">Tutorías</h2>
                        <div class="sectionSeparator"></div>
                    </div>
                    <div class="col-12" style="text-align: center;">
                        <p style="text-align: justify;"> La tutoría es un proceso de acompañamiento grupal o individual
                            que un tutor brinda
                            al estudiante durante su estancia en el Instituto, con el propósito de contribuir a su
                            formación integral e incidir
                            en las metas institucionales relacionadas con la calidad educativa; elevar los índices de
                            eficiencia terminal, reducir
                            los índices de reprobación y deserción. <br><br> La tutoría contempla tres ejes
                            fundamentales: desarrollo académico, desarrollo
                            personal y desarrollo profesional que se ofrece en cada Instituto.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Fin Tutorías -->

<!-- Cursos de verano -->
<div class="bg-primary pt-5">
    <section class="lightSection bg-light">
        <div class="row px-2 g-0">

            <div class="col-lg-6 col-12 py-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="sectionTitle text-center font-bold m-3">Cursos de verano</h2>
                            <div class="sectionSeparator"></div>
                        </div>
                        <div class="col-12 px-4" style="text-align: center;">
                            <p class="text-dark" style="text-align: justify;">
                                El curso de verano es una alternativa que permite al estudiante avanzar o
                                regularizarse en su proceso educativo, este se ofrece de manera presencial, durante
                                seis semanas (dos semanas previas al inicio del periodo vacacional de verano y las 4
                                semanas correspondientes a dicho periodo) de acuerdo con el calendario oficial
                                vigente de la Secretaría de Educación Pública (SEP), ofreciendo las asignaturas de
                                los planes de estudio vigentes.
                                <br><br>
                                El alumno puede reinscribirse hasta en dos asignaturas como máximo o podrá cursar una sola
                                asignatura,
                                cuando ésta sea de opción de curso especial.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 p-2 shadow-sm">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <img class="img-fluid rounded" src="img/IMG_3886.webp" alt="">
                </div>
            </div>

        </div>
    </section>
</div>
<!--Fin Cursos de verano -->

<!-- Titulación -->
<div class="bg-primary pt-5">
    <img src="img/ITVER-7.webp" class="w-full" alt="">
    <section class="darkSection bg-dark">
        <div class="row px-2 g-0">
            <div class="col-lg-12 col-12 py-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="titleDarkSection text-center font-bold m-3">Titulación</h2>
                            <div class="darkSectionSeparator"></div>
                        </div>
                        <div class="col-12 px-4" style="text-align: center;">
                            <p class="text-light" style="text-align: justify;">
                                La titulación integral es la validación de las competencias (conocimientos, habilidades
                                y actitudes)
                                que el estudiante adquirió y desarrolló durante su formación profesional. A través de
                                los siguientes
                                tipos de proyectos de titulación integral:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lightSection bg-light">
        <h5 class="font-bold text-dark py-4" style="text-align: center">Posibles formas de obtener la titulación*</h5>
        <div class="row g-0">

            <div class="col-lg-4 col-sm-6 text-center p-3">
                <div class="area shadow-sm p-4">
                    <img class="areaImage items-center" src="img/icon1.PNG" alt="">
                    <h3 class="areaTitle text-center font-bold text-xl">Proyectos</h3>
                    <p class="areaText">Residencia Profesional, Proyecto de Investigación y/o Desarrollo
                        Tecnológico, Proyecto Integrador, Proyecto Productivo.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 text-center p-3">
                <div class="area shadow-sm p-4">
                    <img class="areaImage items-center" src="img/icon4.PNG" alt="">
                    <h3 class="areaTitle text-center font-bold text-xl">CENEVAL</h3>
                    <p class="areaText">Obtención de un Testimonio de Desempeño Satisfactorio o
                        Sobresaliente en el Examen General de Egreso de Licenciatura (EGEL) del
                        Centro Nacional de Evaluación para la Educación Superior, A. C. (CENEVAL).</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 text-center p-3">
                <div class="area shadow-sm p-4">
                    <img class="areaImage items-center" src="img/icon2.PNG" alt="">
                    <h3 class="areaTitle text-center font-bold text-xl">Tesis</h3>
                    <p class="areaText">Proyecto de Innovación Tecnológica, proyecto de Emprendedurismo, Proyecto
                        Integral
                        de Educación Dual, Estancia, Tesis o Tesina</p>
                </div>
            </div>
        </div>
    </section>

    <section class="lightSection bg-light">
        <div class="row px-2 g-0">


            <div class="col-lg-6 col-12 p-2 shadow-sm">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <img class="img-fluid rounded" src="img/titulacion.webp" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-12 p-4">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <div class="row g-0">
                        <div class="col-12">
                            <h2 class="sectionTitle text-center font-bold m-3">Requisitos para tramitar la titulación:
                            </h2>
                            <div class="sectionSeparator"></div>
                        </div>
                        <div class="col-12" style="text-align: center;">
                            <p class="text-dark" style="text-align: justify;">
                                El egresado debe cumplir con:
                            </p>
                        </div>
                        <div class="bg-light">
                            <ul class="my-3 font-bold" style="text-align: justify">
                                <li>La acreditación del 100% de los créditos de su plan de estudios.</li>
                                <li>La acreditación de un programa de lengua extranjera presentando un certificado o
                                    constancia.*</li>
                                <li>Constancia de no inconveniencia para la realización del acto protocolario
                                    de titulación integral emitida por el Departamento de Servicios Escolares o
                                    su equivalente en los Institutos Tecnológicos Descentralizados.</li>
                                <li>Documento probatorio de no adeudo económico, material o equipo con
                                    las oficinas, laboratorios y centro de información en la institución de la cual
                                    egresó.</li>
                                <li>Liberación del proyecto de titulación integral emitida por el (la) Jefe(a) de
                                    Departamento Académico.</li>
                                <li>Presentar acto protocolario del proyecto de titulación integral.</li>
                            </ul>
                        </div>
                        <p class="text-dark" style="text-align: justify;">
                                *Puede variar según el plan de estudios
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </section>
</div>
<!-- Fin Titulación -->

<!-- Liberación de segunda lengua -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
    <div class="row px-2 g-0">

        <div class="col-lg-6 col-12 py-4">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="row g-0">
                    <div class="col-12">
                        <h2 class="sectionTitle text-center font-bold m-3">Liberación de segunda lengua</h2>
                        <div class="sectionSeparator"></div>
                    </div>
                    <div class="col-12 px-4" style="text-align: center;">
                        <p class="text-dark" style="text-align: justify;">
                            Para poder hacer la liberación de segunda lengua, debes de cumplir con una certificación
                            externa que se encuentre avalada por la certificación
                            nacional de nivel de idioma (CENNI) que evalúe 4 habilidades y se obtenga un nivel mínimo B1
                            o cursar los cinco niveles de inglés o algún otro idioma en el Centro de Idiomas en el
                            ITVER.
                            <br><br>
                        </p>
                        <h5 class="font-bold" style="text-align: justify">Medios de contacto:</h5>
                        <p class="text-dark" style="text-align: justify;">
                            Correo electrónico: coo_cle@vercaruz.tecnm.mx <br>
                            FB: <a class="text-decoration-none" href="https://www.facebook.com/LenguaExtranjeraItver"
                                target="_blank"> Centro de Idiomas ITVERr</a><br>
                        </p>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-lg-6 col-12 p-2 shadow-sm">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <img class="img-fluid rounded" src="img/centroIdiomas.webp" alt="">
            </div>
        </div>

    </div>
</section>
<!--Fin Liberación de idiomas-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    const modalReticula = document.getElementById('modalReticula');
    modalReticula.addEventListener('show.bs.modal',
        event => {
            // Button that triggered the modal
            const button = event.relatedTarget;

            // se obtienen los atributos que se encuentran en el botón de 'Ver más'
            const id = button.getAttribute('data-id');
            const materia = button.getAttribute('data-materia');
            const videoReticula = button.getAttribute('data-videoMateria');
            const descripcion = button.getAttribute('data-descMateria');
            const url = button.getAttribute('data-urlMateria');

            // se obtienen los elementos por su ID y se cambian los valores.
            document.getElementById("modalTitulo").innerHTML = `${materia}`;
            document.getElementById("descReticula").innerHTML = `${descripcion}`;
            $("#videoReticula iframe").attr('src', videoReticula);
            $("#urlReticula").attr('href', url);

        });

    $("#modalReticula").on('hidden.bs.modal', function (e) {
        $("#modalReticula iframe").attr("src", '');
    });

    function youtubePlay(btn) {
        var id = $(btn).data("id");
        var videoReticula = $(btn).data("videomateria");
        var theModal = $(btn).data("bs-target"),
            videoSRCauto = videoReticula + "?autoplay=1";

        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.btn-close').click(function () {
            $(theModal + ' iframe').attr('src', videoReticula);
        });
    }
</script>