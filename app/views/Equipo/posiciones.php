<div class="row container">
  <div class="col-md-12"></br><br><br></div>
</div>
  <div class="row container">
    <div class="col-md-6 col-md-offset-6">
      <h2>Tabla General</h2>
    </div>
    <div class="col-md-10 col-md-offset-2">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>G</th>
          <th>P</th>
          <th>%</th>
          <th>CA</th>
          <th>CP</th>
          <th>DIF</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($array as $value) { ?>
        <tr>
          <td><?= $value->nombre ?></td>
          <td><?= $value->p_win ?></td>
          <td><?= $value->p_loss ?></td>
          <td><?= $value->p_win/($value->p_loss + $value->p_win) ?></td>
          <td><?= $value->carreras ?></td>
          <td><?= $value->permitidas ?></td>
          <th><?= ($value->carreras > $value->permitidas)? '+':''?> <?= $value->carreras - $value->permitidas ?></th>
        </tr>
      <?php } ?>
      </tbody>
    </table>
    </div>
  </div>
