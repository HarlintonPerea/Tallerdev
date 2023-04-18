<div class="modal fade" id="modal-delete-{{$per->id}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
{{Form::Open(array('action'=>array('App\Http\Controllers\PersonaController@destroy',$per->id),'method'=>'delete'))}}
<div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Eliminar Persona</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 <p>Confirme si desea Eliminar La Persona</p>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
 <button type="submit" class="btn btn-primary">Confirmar</button>
 </div>
 </div>
 </div>
</div>
{{Form::Close()}}