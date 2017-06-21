{include file="header.tpl"}
{include file="navbar.tpl"}
  <div class="container main">
    <div class="row">
      <div class="col-sm-1 col-md-1">
      </div>
      <div class="col-sm-10 col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Sugerencias:</div>
          <div class="panel-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="InputName" class="col-sm-3 col-md-3 control-label">Usuario</label>
                <div class="col-sm-9 col-md-9">
                  <input type="text" class="form-control" name="userSuggest" placeholder="Ingrese su usuario">
                </div>
              </div>
              <div class="form-group">
                <label for="inputage" class="col-sm-3 col-md-3 control-label">Tipo de sugerencia</label>
                <div class="col-sm-9 col-md-9">
                  <input type="text" class="form-control" name="typeSuggest" placeholder="Ej: felicitaciones, mejoras, experiencia personal">
                </div>
              </div>
              <div class="form-group">
                <label for="inputsuggest" class="col-sm-3 col-md-3 control-label">Sugerencia</label>
                <div class="col-sm-9 col-md-9">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 boton">
                  <button type="submit" name="button" class="btn btn-danger">ENVIAR</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
{include file="footer.tpl"}
