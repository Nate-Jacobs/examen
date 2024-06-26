<div class="modal fade" id="modal-delete-{{$habi->id}}">
    <div class="modal-dialog">
    <form action="{{route('habitacion.destroy',$habi->id)}}" method="post" class="form">
        @csrf
        @method('DELETE')
        <div class="modal-content bg-danger">
          <div class="modal-header">
            <h4 class="modal-title">Eliminar Producto</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span>$times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Desea eliminar el producto {{$habi->tipo}}?</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-outline-light" >Eliminar</button>
          </div>
        </div>
      </form>
    </div>
  </div>