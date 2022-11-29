
  <!-- Modal -->
  <div class="modal fade" id="Modal_3{{$consulta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal_3" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black">Eliminar libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-align: center">

          <div class="card-body" >
          <div class="modal-body">

              <div class="card-body" style="color: black">
                <form method="post" action="{{route('dead',$consulta->id)}}">
                  @csrf
                  {!!method_field('PUT')!!}
                  <br>
                  <h4  >Titulo</h4>
                  <h1 >{{$consulta->TITULO}}"</h1>
                  
                    <h2  >Autor</h2>
                    <br>
                    <h1>{{$consulta->AUTOR}}"</h1>
                    <h2  >ISBN</h2>
                    <br>
                    <h2>{{$consulta->ISBN}}"</h2>
             
              </div>


          </div>
             
    
         
        
        </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Canselar</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </form>
        </div>

      </div>
    </div>
  </div>