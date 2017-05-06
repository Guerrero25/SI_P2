<div style="height:80px" class="col-md-12"><br></div>
  <div class="row">
    <div class="text-center" class="col-md-12">
      <h1>Editar estadisticas del jugador</h1>
    </div>
    </div>
    <div class="row">
      <div style="height:30px" class="col-md-12"><br></div>
      <div class="col-md-2 col-md-offset-5">
        <img width="200px" height="200px" src="<?php echo URL.APP_PATH.'views/'.DFT; ?>img/jugador.jpg">
      </div>
      <div class="col-md-5"><br></div>
    </div>
    <div class="row">
      <input type="hidden" name="id" value="<?= $array->id ?>">
    <div class="col-md-3 col-md-offset-2">
        <h3>Nombre: <span><?php echo $array->nombre; ?></span></h3>
    </div>
    <div class="col-md-3">
        <h3>Posicion: <span><?php echo $array->posicion; ?></span></h3>
    </div>
    <div class="col-md-3">
        <h3>Equipo: <span><?= $array->id_equipo ?></span></h3>
    </div>
  </div>
  <div class="row">

      <div style="height:30px" class="col-md-12"><br></div>
      <div class="col-md-3 col-md-offset-3">
        <label for="hits">Hits: </label><input class="form-control" type="number" min="0" max="100" value="<?= $array->hits ?>" id="hits">
      </div>
      <div class="col-md-3">
        <label for="turnos">Turnos: </label><input class="form-control" type="number" min="1" max="1000" value="<?= $array->t_bate  ?>" id="turnos">
      </div>
      <div style="height:30px" class="col-md-12"><br></div>
      <?php if($array->posicion == "Lanzador"){ ?>
      <div class="col-md-3 col-md-offset-3">
        <label for="limpias">Carreras Limpias: </label><input class="form-control" type="number" min="0" max="100" value="<?= ($array->posicion == "Lanzador")? $array->carreras_limpias : 0 ?>" id="limpias">
      </div>
      <div class="col-md-3">
        <label for="inning">Innings Lanzados: </label><input class="form-control" type="number" min="0" max="100" value="<?= ($array->posicion == "Lanzador")? $array->innings_lanzados : 0 ?>" id="inning">
      </div>
      <?php } ?>
      <div style="height:30px" class="col-md-12"><br></div>
      <div class="col-md-4 col-md-offset-5">
        <button class="btn btn-primary" type="submit" name="editar" id="editar">Guardar</button>
        <a class="btn btn-danger" href="<?= URL.'Jugador/estadisticas' ?>">Cancelar</a>
      </div>

</div>
