<div style="height:150px" class="col-md-12"><br></div>
<div class="row container">
<form action="<?php echo URL.'public/Liga/estadisticasEquipo'; ?>" method="post">
  <div class="col-xs-12 col-sm-8 col-sm-offset-3 col-md-5 col-md-offset-4">
    <label for="div">Division:</label>
        <select class="form-control" id="division" name="division">
          <option value="1">Division 1</option>
          <option value="2">Division 2</option>
          <option value="3">Division 3</option>
          <option value="4">Division 4</option>
        </select>
        <br>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Equipos de la division</button>
      </div>
</form>
  </div>
  <div class="row container">
  <form action="<?php echo URL.'public/Liga/estadisticasEquipo'; ?>" method="post">
    <div class="col-xs-12 col-sm-8 col-sm-offset-3 col-md-5 col-md-offset-4">
      <br />
          <input style="visibility:hidden; display:none;" class="ocultar" type="text" value="Todos" name="todo" id="todo">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Todos los equipos</button>
    </div>
  </form>
    </div>
  <div class="container row">
    <div style="height:100px" class="col-md-12"><br></div>
    <div class="col-md-4 col-md-offset-5">
      <h2 style="text-align:center;">Listado de Equipos</h2>
    </div>
    <div style="height:50px" class="col-md-12"><br></div>
    <div class="text-center col-md-10 col-md-offset-2">
    <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Posición</th>
                <th class="text-center">Division</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($array as $value) { ?>
              <tr>
                <td><a href="<?php echo URL.'public/Liga/equipo'; ?>"><?= $value->nombre ?></a></td>
                <td>1</td>
                <td><?= $value->e_div?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          </div>
        </div>
