

<div class="container">
  <div style="height:100px" class="col-md-12">
    <br>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h1 class="text-center">Estadisticas del Jugador</h1>
    </div>
    <div style="height:30px" class="col-md-12">
  </div>
  <div class="jumbotron col-xs-12 col-md-6 col-md-offset-3">
    <h2 class="text-left"><?= $array->nombre ?></h2>
    <br/>
    <div class="row">
    <div class="col-xs-12 col-md-12">
    <img align="left" width="80px" src="<?php echo URL.'/app/views/Default/img/jugador.jpg'; ?>">
    <h4  class="text-center">Informacion general</h4>
    <ul class="list-inline">
      <li>Posicion: <span><?= $array->posicion ?></span></li>
      <li>Edad: <span><?= $array->edad ?></span></li>
      <li>Nacionalidad: <span><?= $array->nacionalidad ?></span></li>
      <li>Batea: <span>D</span></li>
      <li>Lanza: <span>D</span></li>
    </ul>
    </div>
    </div>
    <br/>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="azul">
            <th class="text-center">Hits</th>
            <th class="text-center">Turnos</th>
            <th class="text-center">Promedio Bateo</th>
            <?php if($array->posicion == 'Lanzador'){ ?>
              <th class="text-center">Carreras Limpias</th>
              <th class="text-center">Innings Lanzados</th>
              <th class="text-center">Efectividad</th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center"><?= $array->hits ?></td>
            <td class="text-center"><?= $array->t_bate ?></td>
            <td class="text-center"><?= $array->t_bate/$array->hits ?></td>
            <?php if($array->posicion == 'Lanzador'){ ?>
              <td class="text-center"><?= $array->carreras_limpias ?></td>
              <td class="text-center"><?= $array->innings_lanzados ?></td>
              <td class="text-center"><?= ($array->carreras_limpias/$array->innings_lanzados)*9 ?></td>
            <?php } ?>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
