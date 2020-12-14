  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php base_url(); ?>/home" class="nav-link">Home</a>
      </li>
      </li>

      <?php
    $url= base_url();
    foreach($puntos as $pnt){
    echo "<li class='nav-item d-none d-sm-inline-block'>";
    echo "<a href={$url}$pnt->redic class='nav-link'> $pnt->nombre</a>";
    echo "</li>";
    }
   ?>

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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  
  <?php $url = base_url();?>
      <img src="<?php $url?>/img/mp-01.png" width="200px" height="200px"  style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="">
         
         </li>
              
         
             
              
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
   
    <!-- /.sidebar -->
  </aside>