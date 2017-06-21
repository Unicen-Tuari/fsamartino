{include file="header.tpl"}
{include file="navbar.tpl"}
<div class="container main">
  <div class="row">
    <div class="col-sm-1 col-md-2">
    </div>
    <div class="col-sm-10 col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">Ingrese caracteristicas del juego:</div>
        <div class="panel-body">
          <form action="juego/insertGame" method="post" class="form-horizontal">
            <div class="form-group">
              <label for="name_game" class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_game">
              </div>
            </div>
            <div class="form-group">
              <label for="category" class="col-sm-2 control-label">Categoria</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="category">
              </div>
            </div>
            <div class="form-group">
              <label for="fabricator" class="col-sm-2 control-label">Fabricante</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="fabricator">
              </div>
            </div>
            <div class="form-group">
              <label for="description" class="col-sm-2 control-label">Descripcion</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="description">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 boton">
                <input type="submit" class"btn" name="buttonSend" value="Insertar">
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
