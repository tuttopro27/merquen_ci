<link rel="stylesheet" a href="css-grid.css">
<h3>Bienvenido <?= session()->get('nombre') ?></h3>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class='game-board'>
      
        <img src="<?php base_url(); ?>img/piso-madera.jpg" />
        <?php
        foreach ($mesas as $ms) {
          if ($ms->personas == 2) {
            echo  "<div class='box'>  $ms->numero_Mesa  <img src='img/rvacia.gif' width='90px' /></div>";
          } else if ($ms->personas == 4) {
            echo  "<div class='box'>  $ms->numero_Mesa  <img src='img/vacia.gif' width='90px' /></div>";
          }
          else if ($ms->personas == 6) {
            echo  "<div class='box'>  $ms->numero_Mesa  <img src='img/recvacia.gif' width='90px' /></div>";  
        }
        }
        ?>


      </div>
    </div>
  </div>
</div>