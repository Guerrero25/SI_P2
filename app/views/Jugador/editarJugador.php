<div style="height:80px" class="col-md-12"><br></div>
  <div class="row">
    <div class="text-center" class="col-md-12">
      <h1>Editar estadisticas del jugador</h1>
    </div>
    </div>
    <div class="row">
      <div style="height:30px" class="col-md-12"><br></div>
      <div class="col-md-2 col-md-offset-5">
        <img width="200px" height="200px" src="../img/jugador.jpg">
      </div>
      <div class="col-md-5"><br></div>
    </div>
    <div class="row">
    <div class="col-md-3 col-md-offset-2">
        <h3>Nombre: <span><?php echo $array->nombre; ?></span></h3>
    </div>
    <div class="col-md-3">
        <h3>Posicion: <span><?php echo $array->posicion; ?></span></h3>
    </div>
    <div class="col-md-3">
        <h3>Equipo: <span>Cartagenitos</span></h3>
    </div>
  </div>
  <div class="row">
    <form action="">
      <div style="height:30px" class="col-md-12"><br></div>
      <div class="col-md-3 col-md-offset-3">
        <label for="">Hits: </label><input class="form-control" type="number" min="0" max="100" onchange="cambiar();" id="hits">
      </div>
      <div class="col-md-3">
        <label for="">Turnos: </label><input class="form-control" type="number" min="1" max="1000" onchange="cambiar();" id="turnos">
      </div>
      <div class="promedio text-center col-md-12">
        <h1 id="mostrar"></h1>
      </div>
      <div class="col-md-2 col-md-offset-5">
        <button class="form-control btn btn-primary" type="submit" name="button">Guardar</button>
      </div>
      </form>
</div>
