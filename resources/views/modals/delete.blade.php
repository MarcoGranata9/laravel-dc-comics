<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal{{$comic->id}}">
    <i class="fa-solid fa-trash"></i>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="delete-modal{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ATTENZIONE!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler cancellare {{ $comic->title }}? <br>
          Non è possibile tornare indietro!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
          <form action="{{ route('comics.destroy', ['comic'=> $comic->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella</button>
          </form>        
        </div>
      </div>
    </div>
  </div>