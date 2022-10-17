<div class="container">
<form action="edit/{$id}" method="POST" class="my-2">
<div class="row">
    <div class="col-2">
        <div class="form-group">
            <label>Nombre</label>
            <input name="name" type="text" class="form-control">
        </div>
    </div>
    {if (($smarty.session.USER_ID == 1))}
    <div class="col-2">
    <div class="form-group">
        <label>Categoria</label>
        <select name="category" class="form-control">
            <option value="comun">comun</option>
            <option value="raro">raro</option>
            <option value="epico">epico</option>
            <option value="legendario">legendario</option>
        </select>
    </div>
    </div>
    {else}
        <div class="col-2">
        <div class="form-group">
            <label>Categoria</label>
            <select name="category" class="form-control" aria-label="Disabled select example" disabled>
                <option value="comun">comun</option>
                <option value="raro">raro</option>
                <option value="epico">epico</option>
                <option value="legendario">legendario</option>
            </select>
        </div>
        </div>
    {/if}
    <div class="col-2">
        <div class="form-group">
            <label>Elemento</label>
            <select name="elemento" class="form-control">
                <option value="normal">Normal</option>
                <option value="hielo">Hielo</option>
                <option value="fuego">Fuego</option>
                <option value="electro">Electro</option>
            </select>
        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            <label>Velocidad</label>
            <select name="speed" class="form-control">
                <option value="muy alta">muy alta</option>
                <option value="alta">alta</option>
                <option value="media">media</option>
                <option value="baja">baja</option>
                <option value="muy baja">muy baja</option>
            </select>
        </div>
    </div>
    {if (($smarty.session.USER_ID == 1))}
    <div class="col-2">
        <div class="form-group">
            <label>Rendimiento</label>
            <select name="rendimiento" class="form-control">
                <option value="bajo">bajo</option>
                <option value="alto">alto</option>
            </select>
        </div>
    </div>
    </div>
    {else} <div class="col-2">
        <div class="form-group" >
            <label>Rendimiento</label>
            <select name="rendimiento" class="form-control" aria-label="Disabled select example" disabled>
                <option value="bajo">bajo</option>
                <option value="alto">alto</option>
            </select>
        </div>
    </div>
    </div>
    {/if}
<div class="form-group">
    <label>Habilidad</label>
    <textarea name="habilidad" class="form-control" rows="1"></textarea>
</div>
<button type="submit" class="btn btn-primary mt-2">Guardar cambios</button>
</form>
</div>