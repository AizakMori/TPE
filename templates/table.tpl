{include file='templates/header.tpl'}
<table class="table table-dark table-striped">
    <tr>
        <td>Nombre</td>
        <td>Elemento</td>
        <td>Rendimiento</td>
        <td>habilidad</td>
    </tr>
    {foreach from=$valores item=$valor}
         <tr class="table-dark">
             <td class="table-dark">{$valor->nombre}</td>
             <td class="table-dark">{$valor->elemento}</td>
             <td class="table-dark">{$valor->dificil}</td>
             <td class="table-dark"><a href='detail/{$valor->id}'>detalles</a></td>
         </tr>
    {/foreach}
</table>
</main>
{include file= 'templates/footer.tpl'}