{include file="header.tpl"}
{include file="navbar.tpl"}
  <div class="container main">
    <div class="row">
      <div class="col-sm-12 title_game">
        <img src="images/fifa-17-logo.png" alt="TITULO FIFA 17">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-10">
        <img src="images/fifa_17.jpg" alt="FIFA 17" class="img_game" >
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Descripción</h3>
          </div>
          <div class="panel-body">
            <p>{$container[1]['description']}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-bordered">
          <tr>
            <td class="bolder_table">Versiones</td>
            {foreach $container item=name}
            <td class="bolder_table">{$name['nameVersion']}</td>
            {/foreach}
          </tr>
          <tr>
            <td class="bolder_table">Precio</td>
            {foreach $container item=name}
            <td>{$name['price']}</td>
            {/foreach}
          </tr>
          <tr>
            <td class="bolder_table">Free coins</td>
             {foreach $container item=name}
            <td>{$name['freeCoins']}</td>
            {/foreach}
          </tr>
          <tr>
            <td class="bolder_table">Online</td>
            {foreach $container item=name}
            {if $name['online'] == 1}
              <td>SI</td>
            {/if}
            {if $name['online'] == 0}
              <td>NO</td>
            {/if}
            {/foreach}
          </tr>
          <tr>
            <td class="bolder_table">Max Jugadores</td>
            {foreach $container item=name}
            <td>{$name['players']}</td>
            {/foreach}
          </tr>
          <tr>
            <td class="bolder_table">Compre aquí</td>
            {foreach $container item=name}
            <td><button type="button" name="button" class="btn btn-danger btn-lg">Comprar</button></td>
            {/foreach}
          </tr>
          <tr>
            <td class="bolder_table">Opciones:</td>
            {foreach $container item=name}
              <td>
                  <a href="version/borrar/{$name['id_version']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"> &nbsp;&nbsp;  </span></a>
                  <a href="version/modificar/{$name['id_version']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true">  </span></a>
              </td>
            {/foreach}
          </tr>
        </table>
      </div>
    </div>
  </div>
  {include file="footer.tpl"}
