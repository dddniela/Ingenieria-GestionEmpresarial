<?php
require_once("src/Models/Seccion.php");
$seccion = new Seccion();
$seccion->setConnection($conn->getDB());

$objetivo = $seccion->getObjetivo();
$objetivo = $objetivo['data'];
$ingreso = $seccion->getPerfilIng();

?>
<!-- Portada -->
<div class="row g-0">
    <div class="position-relative w-100 overflow-hidden">
        <img class="w-100 img-fluid" src="img/portadas/IMG_2834.png" alt="">
        <div class="position-absolute top-50 start-50 translate-middle w-100">
            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                <h1 class="fw-bold text-warning shadow-text">Perfil de Egreso</h1>
                <h1 class="fw-bold text-light d-md-flex d-none shadow-text">Ingeniería en Gestión Empresarial</h1>
            </div>
        </div>
    </div>
</div>
<!-- Fin Portada-->

<!-- Objetivo general -->

<section class="p-2">
    <div class="row px-2 g-0">
        <div class="col-lg-6 col-sm-12">
            <div class="galleryContainer bg-light">
                <div class="row g-0">
                    <div class="col-4 px-2">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/eco_1.png" alt="">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/eco_4.png" alt="">
                    </div>

                    <div class="col-4 px-2">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/eco_2.png" alt="">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/eco_5.png" alt="">
                    </div>

                    <div class="col-4 px-2">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/eco_3.png" alt="">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/eco_6.png" alt="">
                    </div>

                </div>
            </div>
        </div>

        <div class="lightSection col-lg-6 col-12 p-4">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="row g-0">
                <div class="col-12">
                        <h2 class="sectionTitle text-center font-bold m-3">Objetivo general</h2>
                        <div class="sectionSeparator"></div>
                    </div>
                    <div class="col-12" style="text-align: center;">
                        <p style="text-align: justify;">
                            <?php
                            if ($objetivo) {
                                echo $objetivo['descripcion'];
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fin Objetivo general -->

<!-- Perfil de ingreso -->
<section class="lightSection bg-light p-2">
    <div class="row px-2 g-0">
        <div class="col-lg-6 col-12 p-2 shadow-sm">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <img class="img-fluid rounded" src="img/IMG_596.png" alt="">
            </div>
        </div>

        <div class="lightSection col-lg-6 col-12 p-4">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="row g-0">
                    <div class="col-12">
                        <h2 class="sectionTitle text-center font-bold m-3">
                            Perfil de ingreso
                        </h2>
                        <div class="sectionSeparator"></div>
                    </div>
                    <div class="col-12" style="text-align: center;">
                        <p style="text-align: justify;">
                            <?php
                            if ($ingreso) {
                                echo $ingreso->descripcion;
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin perfil de ingreso -->

<!-- Perfil de egreso -->
<div class="informationContainer">
    <div class="row g-0 align-items-center">
        <div class="col-lg-12">
            <!-- Puntos del perfil de egreso -->
            <section class="lightSection bg-light p-2">
                <h2 class="sectionTitle text-center font-bold m-3">Perfil de egreso</h2>
                <div class="sectionSeparator"></div>

                <div class="row g-0">
                    <?php
                    echo $seccion->imprimirPerfilEgreso();
                    ?>
                </div>
            </section>
            <!-- Fin Puntos del perfil de egreso -->

        </div>
    </div>
</div>
<!-- Fin Perfil de egreso-->
<!-- nancy daniela mendez arpidez -->
<!-- Galeria de imagenes -->
<section class="darkSection bg-dark p-2 px-4">
    <div class="row mb-4 px-2 g-0">
        <div class="darkSection bg-dark">
            <h2 class="titleDarkSection text-center font-bold">Galería de imágenes</h2>
            <div class="darkSectionSeparator"></div>
        </div>

        <div class="col-lg-8 col-sm-12">
            <div class="galleryContainer bg-dark">
                <div class="row g-0">
                    <div class="col-md-4 px-2">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO08.webp" alt="">
                        </a>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO10.webp" alt="">
                        </a>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO28.webp" alt="">
                        </a>
                    </div>

                    <div class="col-md-4 px-2">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage4">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorio/IMG_1325.jpg"
                                alt="">
                        </a>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage5">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO32.webp" alt="">
                        </a>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage6">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO22.webp" alt="">
                        </a>
                    </div>

                    <div class="col-md-4 px-2">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage7">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO37.webp" alt="">
                        </a>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage8">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO23.webp" alt="">
                        </a>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage9">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_ECO36.webp" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="galleryContainer bg-dark">
                <div class="row g-0">
                    <div class="col-12 px-2">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage10">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/admin_50.webp" alt="">
                        </a>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage11">
                            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Venus.webp" alt="">
                        </a>
                    </div>


                </div>
            </div>
        </div>

    </div>
</section>
<!-- Fin Galeria de imagenes -->

<!-- Modals de la galería-->
<div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO08.webp" alt="">
            <p>Vista desde el Edificio F</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage2" aria-hidden="true" class="modal fade" id="modalImage2">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO10.webp" alt="">
            <p>Pasillo - Edificio E</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage3">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO28.webp" alt="">
            <p>Edificio B</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage4" aria-hidden="true" class="modal fade" id="modalImage4">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/laboratorio/IMG_1325.jpg" alt="">
            <p>Laboratorio Simulación de Negocios</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage5" aria-hidden="true" class="modal fade" id="modalImage5">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO32.webp" alt="">
            <p>Entrada al Tecnológico de Veracruz</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage6" aria-hidden="true" class="modal fade" id="modalImage6">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO22.webp" alt="">
            <p>Edificio B</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage7" aria-hidden="true" class="modal fade" id="modalImage7">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO37.webp" alt="">
            <p>Bancas - Edificio L</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage8" aria-hidden="true" class="modal fade" id="modalImage8">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO23.webp" alt="">
            <p>Edificio Q</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage9" aria-hidden="true" class="modal fade" id="modalImage9">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/IMG_ECO36.webp" alt="">
            <p>Áreas verdes</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage10" aria-hidden="true" class="modal fade" id="modalImage10">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/admin_50.webp" alt="">
            <p>Departamento de Ciencias Económico-Administrativas</p>
        </div>
    </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage11" aria-hidden="true" class="modal fade" id="modalImage11">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent text-white text-center">
            <img src="img/Venus.webp" alt="">
            <p>Estatua Venus</p>
        </div>
    </div>
</div>

<!-- Fin Modals de la galería-->