
  <!-- Modal -->
  <div class="modal fade" id="Modal_2{{$consulta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal_2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black">Editar Libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-align: center">
          <div style="background-color: grey">
          <form action="{{route('editar.libros',$consulta->id)}}" method="POST" >
            @csrf
            {!!method_field('PUT')!!}
            <div class="mb-3">
              <label class="form-label">insertar ISBN</label>
              <input  class="form-control" name="ISBN" value="{{$consulta->ISBN}}" >
              <p class="text-danger">{{ $errors->first('ISBN') }}</p>
            </div>
            <div class="mb-3">
              <label class="form-label">insertar Titulo</label>
              <input class="form-control" name="titulo" value="{{$consulta->TITULO}}">
              <p class="text-danger">{{ $errors->first('titulo') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">insertar Autor</label>
                <input  class="form-control" name="Autor" value="{{$consulta->AUTOR}}">
                <p class="text-danger">{{ $errors->first('Paginas') }}</p>
              </div>
              <div class="mb-3">
                <label class="form-label">insertar Paginas</label>
                <input class="form-control" name="Paginas" value="{{$consulta->PAGINAS}}" >
                <p class="text-danger">{{ $errors->first('Paginas') }}</p>
              </div>
              <div class="mb-3">
                <label class="form-label">insertar editorial</label>
                <input  class="form-control" name="editorial" value="{{$consulta->EDITORIAL}}">
                <p class="text-danger">{{ $errors->first('editorial') }}</p>
              </div>
              <div class="mb-3">
                <label class="form-label">insertar Mail de la Editorial</label>
                <input class="form-control" name="Mail_Editorial" value="{{$consulta->EMAIL}}">
                <p class="text-danger">{{ $errors->first('Mail_Editorial') }}</p>
              </div>
          
        
           
        
             

          </div>
        </div>
        <div class="modal-footer">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
    
    
      </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Canselar</button>
        </div>

      </div>
    </div>
  </div>