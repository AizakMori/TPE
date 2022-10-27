{include file='templates/header.tpl'}

<table class="table table-dark table-striped-columns">
    <tr>
        <td>Num. invoc</td>
        <td>Nombre</td>
        <td>Categoria</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Rendimiento</td>
        <td>habilidad</td>
    </tr>
    {foreach from=$categories item=$valor}
         <tr >
            <td >{$valor->id_puntos}</td>
            <td >{$valor->nombre}</td>
            <td class="table-secondary">{$valor->normal}</td>
             <td >{$valor->elemento}</td>
             <td >{$valor->velocidad}</td>
             <td >{$valor->dificil}</td>
             <td >{$valor->habilidad}</td>
         </tr>
    {/foreach}
</table>