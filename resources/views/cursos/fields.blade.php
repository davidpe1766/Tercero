<div class="mb-3">
    <label for="cur_titulo" class="form-label">Titulo</label>
    <input type="text" name="cur_titulo" value="{{ isset($curso)?$curso->cur_titulo:'' }}" class="form-control" id="cur_titulo">
    <label for="cur_descripcion" class="form-label">Descripcion</label>
    <input type="text" name="cur_descripcion" value="{{  isset($curso)?$curso->cur_descripcion:'' }}" class="form-control" id="cur_descripcion">
    <label for="cur_grupo" class="form-label">Grupo</label>
    <input type="text" name="cur_grupo" value="{{  isset($curso)?$curso->cur_grupo:'' }}" class="form-control" id="cur_grupo">
 </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
