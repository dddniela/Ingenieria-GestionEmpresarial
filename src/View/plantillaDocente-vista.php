<div class="row g-0">
  <div class="position-relative w-100 overflow-hidden">
    <img class="w-100 img-fluid" src="img/portadas/IMG_2123.png" alt="" />
    <div class="position-absolute top-50 start-50 translate-middle w-100">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="fw-bold text-warning shadow-text">Plantilla Docente</h1>
        <h1 class="fw-bold text-light d-md-flex d-none shadow-text">
          Ingeniería en Gestión Empresarial
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="container my-2">
  <div class="row justify-content-md-start justify-content-center">
    <?php
    $inf = 0;
    if (isset($_GET['inferior'])) {
      $inf = $_GET['inferior'];
    }

    $datos = $docente->imprimirDatos($inf);
    echo $datos;
    ?>
  </div>
</div>

<div class="row g-0 my-2">
  <?php
  $paginacion = $docente->generarPaginacion();
  echo $paginacion;
  ?>