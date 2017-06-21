{include file="header.tpl"}
{include file="navbar.tpl"}
<div class="conteiner main">
  <div class="row">
    <div class="col-sm-1 col-md-3">
    </div>
    <div class="col-sm-10 col-md-6">
      <h3>Elija el juego deseado</h3>
      <ul class="list-group-item">{foreach from=$juegos item=juego}
        <li class="list-group-item list-group-item-success">{$juego['fabricator']}
          <li class="list-group-item disabled">{$juego['category']}
            <a href="juego/detalles/{$juego['id_game']}" class="list-group-item"> {$juego['name_game']}</a>
          </li>
        </li>
        {/foreach}
    </ul>
  </div>
</div>
</div>
{include file="footer.tpl"}
