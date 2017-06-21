{include file="header.tpl"}
{include file="navbar.tpl"}
<div class="container main">
  <div class="row">
    <div class="col-sm-1 col-md-1">
    </div>
    <div class="col-sm-10 col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">Complete todos los campos para resgistrarse:</div>
        <div class="panel-body">
          <form action="login/insertNewUsr" method="post" class="form-horizontal">
            <div class="form-group">
              <label for="email" class="col-sm-4 control-label">Email</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="tagUsr" class="col-sm-4 control-label">Nombre de Usuario</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="tagUsr">
              </div>
            </div>
            <div class="form-group">
              <label for="passwd" class="col-sm-4 control-label">Contraseña</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="passwd">
              </div>
            </div>
            <div class="form-group">
              <label for="fullNameUsr" class="col-sm-4 control-label">Nombre completo</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="fullNameUsr">
              </div>
            </div>
            <div class="col-sm-2 col-md-2">
            </div>
            <div class="row">
              <div class="col-sm-8 boton">
                <button type="submit" name="button" class="btn btn-danger">REGISTRARSE</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
{include file="footer.tpl"}
