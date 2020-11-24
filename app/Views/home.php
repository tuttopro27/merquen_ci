<h3>Bienvenido <?= session()->get('nombre') ?></h3>
<div class="container">
  <div class="row">
    <div class="col-12">
       <div class="card" style="width: 18rem;">
  <div class="card-header">
    <h2>Puntos de venta</h2>
  </div>
  <ul class="list-group list-group-flush">
    <?php 
    foreach ($puntos as $pnt)
    {
      echo'<li class="list-group-item"><a href="#">'.$pnt->nombre.'</a></li>';
    }
    ?>
  </ul>
</div>      
            
    </div><form>
             

          </div>
      </div>
    </div>
  </div>
</div>