{include file='templates/header.tpl'}
<h1>Detalles de </h1>
<table class="table table-dark table-striped">
    <tr>
        <td>Nombre</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Rendimiento normal</td>
        <td>Rendimiento dificil</td>
        <td>habilidad</td>
    </tr>
    {foreach from=$detail item=$valor}
         <tr class="table-dark">
             <td class="table-dark">{$valor->nombre}</td>
             <td class="table-dark">{$valor->elemento}</td>
             <td class="table-dark">{$valor->velocidad}</td>
             <td class="table-dark">{$valor->normal}</td>
             <td class="table-dark">{$valor->dificil}</td>
             <td class="table-dark">{$valor->habilidad}</td>
         </tr>
    {/foreach}
</table>
</main>
{include file= 'templates/footer.tpl'}