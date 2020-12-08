  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="<?php base_url(); ?>home" class="nav-link">Home</a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="<?php base_url(); ?>mesas" class="nav-link">Bar</a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="<?php base_url(); ?>mesas/mesasRestaurante" class="nav-link">Restaurante</a>

      </li>



    </ul>
    <div class="dropdown-divider">

    </div>
    <a href="#" class="dropdown-item">
    </a>
    <div class="info">
      <p class="d-block">Usuario <?= session()->get('nombre') ?>

        <a href="<?= base_url() ?>/Usuario/logout">Cerrar Sesión</a>

    </div>
    </li>
    </ul>
  </nav>