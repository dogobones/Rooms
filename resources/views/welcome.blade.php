@extends('layouts.admin')
@section('content')
<h1 class="cover-heading">Rooms</h1>
<p class="lead">Monitorea los equipos activos de los sitios.</p>
<p class="lead">
  <button type="button" class="btn btn-lg btn-info "data-toggle="modal" data-target="#AgregarArea" >Agregar área</button>
</p>

<!-- Modal -->
<div class="modal fade" id="AgregarArea" tabindex="-1" role="dialog" aria-labelledby="AgregarAreaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="AgregarAreaLabel"><i class="fas fa-plus-square"></i> Agregar área</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
      <span class="input-group-text">Nombre:</span>
      </div>
      <input type="text" class="form-control" placeholder="Nombre del área" aria-label="Nombre del área">
    </div>
    <select id="equipos" style="width: 100%;">
      <option value="0">Equipos:</option>
      <option value="1">Antena 1</option>
      <option value="2">Antena 2</option>
      <option value="3">Antena 3</option>
    </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="AgregarAreaButton" type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<script>
$( function() {
$( ".resizable" ).draggable({
  containment: "#containment-wrapper",
  snap: true
  });
  $( ".resizable" ).resizable({
    containment: "#containment-wrapper",
      minHeight: 50,
      minWidth: 50
  });
} );
</script>
@endsection
