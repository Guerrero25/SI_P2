    <br><br><br>
    <div class="container">
      <h1 class="text-center">Registrar partidos</h1>
      <div class="row">
        <div style="height:50px" class="col-md-12">
          <br>
        </div>
        <div class="col-md-4 col-md-offset-4">
          <select class="form-control selectpicker" name="division" id="division">
            <option value="1">Division 1</option>
            <option value="2">Division 2</option>
            <option value="3">Division 3</option>
            <option value="4">Division 4</option>
          </select>
        </div>
      </div>
      <div style="height:50px" class="row">
        <br>
      </div>
      <div class="row">
        <div class="col-md-4">
          <select class="form-control selectpicker" name="equipoL" id="equipoL">

          </select>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-4 col-md-offset-1">
              <input class="form-control" type="number" max="100" min="0" name="mlocal" id="mlocal">
            </div>
            <div class="col-md-2">
              <h4>VS</h4>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="number" max="100" min="0" name="mvisita" id="mvisita">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <select class="form-control selectpicker" name="equipoV" id="equipoV">

          </select>
        </div>
      </div>
      <div class="row">
        <div style="height:20px" class="col-md-12">
            <br>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <input class="form-control" type="date" min="2017-05-09" max="2017-12-01" name="fecha" id="fecha">
        </div>
      </div>
      <div class="row">
        <div style="height:20px" class="col-md-12">
          <br>
        </div>
        <div class="col-md-4 col-md-offset-4">
          <div class="col-md-5 col-md-offset-1">
              <button type="submit" name="button" class="btn btn-primary" id="guardar">Guardar Partido</button>
          </div>
          <div class="col-md-4">
              <a href="<?php echo URL.'Admin/index'; ?>" name="button" class="btn btn-danger">Cancelar</a>
          </div>

        </div>
      </div>
    </div>
