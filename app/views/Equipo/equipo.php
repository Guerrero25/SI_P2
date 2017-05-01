<div class="container">
  <div style="height:100px" class="col-md-12">
    <br>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h1 class="text-center">Estadisticas del Equipo</h1>
    </div>
    <div style="height:30px" class="col-md-12">
  </div>
  <div class="jumbotron col-xs-12 col-md-6 col-md-offset-3">
    <h2 class="text-center"><?= $array->nombre ?></h2>
    <br/>
    <br/>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div style="height:30px" class="col-md-12 text-center">Estadisticas Generales</div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="azul">
            <th class="text-center">Carreras Anotadas</th>
            <th class="text-center">Partidos Ganados</th>
            <th class="text-center">Partidos Perdidos</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center"><?= $array->carreras  ?></td>
            <td class="text-center"><?= $array->p_win  ?></td>
            <td class="text-center"><?= $array->p_loss  ?></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
    <br/>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div style="height:30px" class="col-md-12 text-center">Lanzando</div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="azul">
            <th class="text-center">Carreras Limpias</th>
            <th class="text-center">Innings</th>
            <th class="text-center">Efectividad</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">13</td>
            <td class="text-center">50</td>
            <td class="text-center">0.26</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
</diV>
