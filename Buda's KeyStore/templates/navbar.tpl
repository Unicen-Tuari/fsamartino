<body>
  <div class="container nav_bar_cont">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><img src="images/icons/logo_green.png" alt="buda_verde">Buda's KeyStore</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href=""> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)</span></a></li>
            <li><a href="sugerencia/editar">Sugerencias</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Juegos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="juego/detalles/2">Deportes</a></li>
                <li><a href="not_found">Acción</a></li>
                <li><a href="not_found">Suspenso</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="listGames">Lista de juegos</a></li>
                <li><a href="juego/formulario">Insertar juego</a></li>
                <li><a href="version/formulario">Insertar version</a></li>
              </ul>
            </li>
            {if $session == FALSE}
              <ul class="nav navbar-nav navbar-right loginDerecha">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Ingresar</b> <span class="caret"></span></a>
                  <ul id="login-dp" class="dropdown-menu">
                    <li>
                      <div class="row">
                        <div class="col-md-12">
                          <form class="form" role="form" method="post" action="login/signin" accept-charset="UTF-8" id="login-nav">
                            <div class="form-group">
                              <label class="sr-only" for="inputUser">Usuario</label>
                              <input type="text" class="form-control" name="tagUsr" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="inputPassword">Password</label>
                              <input type="password" class="form-control" name="passwd" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                          </form>
                        </div>
                        <div class="bottom text-center">
                          ¿Nuevo? <a href="login/register"><b>REGISTRARSE</b></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            {/if}
            {if $session == TRUE}
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Salir</a></li>
              </ul>
            {/if}
          </ul>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
