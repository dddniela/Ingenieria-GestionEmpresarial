<?php
require_once("src/Models/Administrativo.php");
$administrativos = new Administrativo();
$administrativos->setConnection($conn->getDB());

$coordinador = $administrativos->getCoordinador();
$jefeDepartamento = $administrativos->getJefeDepartamento();
?>
<!-- Portada -->
<div class="row g-0">
  <div class="position-relative w-100 overflow-hidden">
    <img class="w-100 img-fluid" src="img/portadas/IMG_2331.png" alt="" />
    <div class="position-absolute top-50 start-50 translate-middle w-100">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="fw-bold text-warning shadow-text">Conócenos</h1>
        <h1 class="fw-bold text-light d-md-flex d-none shadow-text">
          Ingeniería en Gestión Empresarial
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- Fin Portada-->

<!-- Departamento de Económico - Administrativo -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/admin_50.webp" alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Departamento de Ciencias Económico-Administrativas</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;"> El Departamento de Ciencias Económico Administrativas ofrece tres programas
              educativos: Licenciatura en Administración, Ingeniería en Gestión Empresarial y Maestría en
              Administración. <br> <br>
              Nuestro equipo se conforma por:
              Jefatura de Departamento,
              Auxiliar Administrativa/ Coordinación de Actividades Complementarias,
              Jefatura de Proyecto Docente,
              Jefatura de Proyecto de Vinculación,
              Jefatura de Proyecto de Investigación,
              Jefatura de Laboratorio,
              Coordinación de Titulación <br><br>
              El departamento académico cuenta con trece aulas asignadas al área, un laboratorio de “Simulación de
              Negocios”, área de oficinas, cubículos para docentes, entre otras áreas de uso común a nivel
              institucional.

            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Departamento de economico -->

<!-- Descripción Jefa/e del departamento -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombrePuesto . " Ciencias Económico-Administrativas";
              }
              ?>
            </h4>
          </div>
          <div class="col-12" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='img\Docentes\<?php if ($jefeDepartamento)  echo $jefeDepartamento->imagen; ?>' alt="">
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Jefa/e del departamento -->

<!-- Descripción Coordinador -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='<?php if ($coordinador) echo $coordinador->imagen; ?>' alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombrePuesto . " de " . $coordinador->nombreCarrera;
              }
              ?>
            </h4>
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($coordinador) {
                echo $coordinador->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Coordinador -->


<!-- Instalaciones -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 py-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Instalaciones
            </h2>
            <div class="separadorSeccionOscura"></div>
            <h4 class="text-center text-light fw-bold fs-3">
              Laboratorio de Negocios
            </h4>
          </div>
          <div class="col-12">
            <h6 class="text-center text-warning fw-bold fs-6">
              “El verdadero progreso es el que pone la tecnología al alcance de
              todos.”<br />
            </h6>

            <p class="text-light" style="text-align: justify">
              El departamento de ciencias económico-administrativas ofrece a los
              estudiantes un espacio para explorar y trabajar en una variedad de programas, aplicaciones
              y proyectos durante sus actividades prácticas en la licenciatura en administración. <br /><br />
              Estos espacios informáticos están diseñados para desempeñar un papel fundamental como recursos de
              enseñanza y soporte educativo, beneficiando tanto a profesores como a estudiantes.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 d-flex justify-content-center align-items-center">
      <!-- Fin Instalaciones -->

      <!-- Galería con modal para laboratorios de cómputo -->
      <div class="contenedor-galeria bg-dark">
        <div class="row">
          <!-- <div class="col-lg-6"> -->
          
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_3878.webp" alt="" />
          
        </div>
      </div>

    </div>
  </div>
</section>
<!--  Fin Galería con modal para laboratorios de cómputo -->

<!-- Modals de la galería -->

<!-- Imagen 1 -->
<div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_3878.webp" alt="" />
    </div>
  </div>
</div>


<div class="bg-primary pt-5"></div>
<div class="p-4 text-center">
  <h5 class="font-bold">Autores de la página:</h5>
  <p class="font-semibold">Estudiantes de la Generación 2018 - 2023</p>
  <p> Nancy Daniela Mendez Arpidez, Daniela Castro Rodriguez, Yelitza Magali Rosas Jiménez,
    Marco Gabriel Cortés Toledo, Gabriel Escobar Medina </p>
</div>