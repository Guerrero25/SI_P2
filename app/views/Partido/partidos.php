<br><br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="text-align:center;">Reultados recientes</h1><br/>
			</div>
		</div>
		<?php if($array != ''){ ?>
    <?php foreach ($array as $value) { ?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 bordes">
				<div class="col-md-1">
					<img src="<?php echo URL.APP_PATH.'views/'.DFT;?>img/escudo.png"  width="60px" height="60px">
				</div>
				<div class="caja col-md-10">
          <div class="row">
            <div class="col-md-5">
              <h4><?= $value->local ?></h4>
            </div>
            <div class="col-md-2">
              <h4><?= $value->m_local ?> F <?= $value->m_visita ?></h4>
            </div>
            <div class="col-md-5">
              <h4><?= $value->visita ?></h4>
            </div>
          </div>

					<h5><?= date_format($value->fecha,'d/m/y')  ?></h5>
					<h4><?= $value->estadio ?></h4>
				</div>
				<div class="col-md-1">
					<img src="<?php echo URL.APP_PATH.'views/'.DFT;?>img/escudo.png" align="right" width="60px" height="60px">
				</div>
			</div
		</div>
	</div>
  <br>
  <?php } ?>
	<?php }else{ ?>
		<h4>No se ha jugado ningun partido todavia!</h4>
	<?php } ?>
	</section>
