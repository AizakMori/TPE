{include file="templates/header.tpl"}
<div>
<table class="table table-dark table-striped-columns">
<tr class="text-center">
<td><strong>Nro</strong></td>
<td ><strong>Categoria</strong></td>
<td><strong>Rendimiento</strong></td>
</tr>
{foreach from=$category item=$valor}
    <tr class="text-center">
    <td >{$valor->id_puntos}</td>
    <td>{$valor->category}</td>
    <td>{$valor->rendimiento}</td>
    </tr>
{/foreach}
</table>
</div>
<div class="container">
    <form action="categories/update/{$id}" method="POST" class="my-2">
    <div class="form-group">
    <label>Categoria</label>
    <textarea name="editcategory" class="form-control col-auto" rows="1"></textarea>
    </div>
    <div class="row">
        <div class="col-2">
        <div class="form-group">
            <label>Rendimiento</label>
            <select name="rendimiento" class="form-control">
                <option value="alto">Alto</option>
                <option value="medio">Medio</option>
                <option value="bajo">Bajo</option>
            </select>
        </div>
        </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar cambios</button>
    </form>
    </div>