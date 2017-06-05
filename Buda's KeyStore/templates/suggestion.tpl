{include file="header.tpl"}
{include file="navbar.tpl"}
  <div class="container main">
    <div class="row">
      <div class="col-sm-1 col-md-2">
      </div>
      <div class="col-sm-10 col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">Sugerencias:</div>
          <div class="panel-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="exampleInputName2" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName3" placeholder="Ingrese su nombre completo">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputnumber3" class="col-sm-2 control-label">Edad</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="inputNumber3" placeholder="Edad">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputName2" class="col-sm-2 control-label">Sugerencia</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 boton">
        <button type="submit" class="btn btn-default">ENVIAR</button>
      </div>
    </div>
  </div>
</div>
{include file="footer.tpl"}
