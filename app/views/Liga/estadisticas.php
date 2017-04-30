<div class="row container">
<div style="height:150px" class="col-md-12"><br></div>
  <div class="col-md-4"></div>
  <div class="col-xs-5 col-sm-4 col-md-3">
    <label for="sel1">Division:</label>
      <select class="form-control" id="division" name="division">
        <option value="1">Division 1</option>
        <option value="2">Division 2</option>
        <option value="3">Division 3</option>
        <option value="4">Division 4</option>
      </select>
  </div>
  <div class="col-xs-5 col-sm-4 col-md-3">
    <label for="sel1">Equipo:</label>
      <select class="form-control" id="equi">
        <?php foreach ($array as $value) { ?>
          <option><a href="<?php echo $value->id; ?>"><?= $value->nombre ?></a></option>
        <?php } ?>
      </select>
  </div>
  </div>
  <div class="row container">
    <div style="height:100px" class="col-md-12"><br></div>
    <div class="col-md-4 col-md-offset-5">
      <h2 style="text-align:center;">Listado de Jugadores</h2>
    </div>
    <div style="height:50px" class="col-md-12"><br></div>
    <div class="text-center col-md-10 col-md-offset-2">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Posicion</th>
          <th class="text-center">Detalles</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan</td>
          <td>Bateador</td>
          <td><a href="<?php echo URL.'public/Liga/jugador'; ?>">Ver</a></td>
        </tr>
        <tr>
          <td>Juan</td>
          <td>Bateador</td>
          <td><a href="">Ver</a></td>
        </tr>
        <tr>
          <td>Juan</td>
          <td>Bateador</td>
          <td><a href="">Ver</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<script type="text/javascript">
    $('#division').on('change',function() {
      var valor = $(this).val():
      alert(valor);
    });

</script>
