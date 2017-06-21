{include file="header.tpl"}
{include file="navbar.tpl"}
  <div class="container main">
    <div class="row">
      <h1 class="titulo">¡Bienvenido a Buda's KeyStore!</h1>
    </div>
    <div class="row">
      <div class="logo_home">
        <img src="images/icons/logo_green.png" alt="Cara de buda">
      </div>

    </div>
    <div class="row">
      <div class="col-sm-10 col-md-10 subtitulo">
        <h2> Los mas vendidos del mes: </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 ">
        <div id="carousel" class="carousel-pers carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-slide-to="0" class="active"></li>
            <li data-slide-to="1"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>

          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <a href="juego/detalles/2"><img src="images/carousel/fifa-17.jpg" alt="Fifa 17"></a>
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <a href="not_found"><img src="images/carousel/nba-2k17.png" alt="NBA 2k17"></a>
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <a href="not_found"><img src="images/carousel/csgo.png" alt="Cs Go"></a>
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <a href="not_found"><img src="images/carousel/witcher-3.png" alt="The witcher 3"></a>
              <div class="carousel-caption">
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
    </div>
{include file="footer.tpl"}
