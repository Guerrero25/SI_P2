<div class="row container">
  <div class="col-md-12"></br><br><br></div>
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <div class="col-md-6 col-md-offset-3">
          <h4>Division 1</h4>
        </div>
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
              <?php if($value->e_div == 1){ ?>
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
          <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <div class="col-md-6 col-md-offset-3">
          <h4>Division 2</h4>
        </div>
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
              <?php if($value->e_div == 2){ ?>
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
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <div class="col-md-6 col-md-offset-3">
          <h4>Division 3</h4>
        </div>
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
              <?php if($value->e_div == 3){ ?>
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
          <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <div class="col-md-6 col-md-offset-3">
          <h4>Division 4</h4>
        </div>
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
              <?php if($value->e_div == 4){ ?>
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
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
