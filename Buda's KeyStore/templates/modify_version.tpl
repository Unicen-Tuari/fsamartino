{include file="header.tpl"}
{include file="navbar.tpl"}
<div class="container main">
  <div class="row">
    <div class="col-sm-1 col-md-2">
    </div>
    <div class="col-sm-10 col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">Ingrese las nuevas caracteristicas de la version:</div>
        <div class="panel-body">
          <form action="version/modifyVersion/{$idVersion}" method="post" class="form-horizontal">
            <div class="form-group">
              <label for="version" class="col-sm-2 control-label">Version</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nameVersion">
              </div>
            </div>
            <div class="form-group">
              <label for="price" class="col-sm-2 control-label">Precio</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="price">
              </div>
            </div>
            <div class="form-group">
              <label for="online" class="col-sm-2 control-label">Online</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="online">
              </div>
            </div>
            <div class="form-group">
              <label for="players" class="col-sm-2 control-label">Cantidad de jugadores</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="players">
              </div>
            </div>
            <div class="form-group">
              <label for="freeCoins" class="col-sm-2 control-label">Monedas gratis</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="freeCoins">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 boton">
                <button type="submit" name="button" class="btn btn-danger">MODIFICAR</button>
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
