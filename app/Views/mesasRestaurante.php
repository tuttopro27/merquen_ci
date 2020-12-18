<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <div class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1 class="m-0 text-dark">Bar</h1>

        </div><!-- /.col -->

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="<?php base_url() ?>/home">Home</a></li>

            <li class="breadcrumb-item active">Mesas Bar</li>



          </ol>

        </div><!-- /.col -->

      </div><!-- /.row -->

    </div><!-- /.container-fluid -->

  </div>

  <!-- /.content-header -->



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <?php
$url= base_url();

$incremento = 0;

foreach ($mesas as $ms) {

  $alto = $ms->ancho;

  $ancho = $ms->alto;

  $numero_mesa = $ms->numero_Mesa;

  $posicion = $alto . "," . $ancho;

  $mesa = "";

  if ($ms->personas == 2) {

    $mesa =  "<a href='{$url}/tables'><img src='../img/rvacia.gif' width='100%' height='100%' ><div class='divflotanteredondo'>$numero_mesa</div></a>";
  } else if ($ms->personas == 4) {

    $mesa = "<a href='{$url}/tables'><img src='../img/vacia.gif' width='100%' height='100%' /><div class='flotcuadrado'>$numero_mesa</div></a>";
  } else if ($ms->personas == 6) {

    $mesa = "<a href='{$url}/tables'><img src='../img/recvacia.gif' width='100%' height='100%' /><div class='flotrect'>$numero_mesa</div></a>";
  }



  $mesas[$incremento] =

    array(

      "pos" => $posicion,

      "mes" => $mesa,

    );



  $incremento++;
}

?>

      <div class="row">
      
        <section class="col-lg-12 connectedSortable ui-sortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">

            <div class="card-body">
              <div class="tab-content p-0">
              <img src='../img/piso-restaurante.jpg' alt="" style="width: 100%; height: 100%; position:absolute; padding-right:35px; padding-bottom:35px;">
                <div class="TableRestaurante" style="position: relative; width:100%">

                  <div class="divTableBody">

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "0,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "1,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "2,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "3,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "4,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "5,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "6,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "7,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "8,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                    <div class="divTableRow">

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,0") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,1") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,2") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,3") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,4") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,5") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,6") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,7") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,8") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,9") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCelL"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,10") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                      <div class="divTableCell"><?php for ($i = 0; $i < $incremento; $i++) {
                                                  if ($mesas[$i]["pos"] == "9,11") {
                                                    echo $mesas[$i]["mes"];
                                                  }
                                                } ?></div>

                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>

      </div>
    </div>
</div><!-- /.card-body -->
</div>

</section>

</div>

</div><!-- /.container-fluid -->
</section>
</div>