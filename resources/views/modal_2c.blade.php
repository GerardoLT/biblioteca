
  <!-- Modal -->
  <div class="modal fade" id="Modal_2c{{$consulta->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal_2c" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black">editar Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-align: center">

       
          <div class="modal-body">
            <div style="background-color: grey">
              <form action="{{route('editar.cliente',$consulta->idCliente)}}" method="POST" >
                @csrf
                {!!method_field('PUT')!!}
                <div class="mb-3">
                  <label class="form-label">insertar nombre completo</label>
                  <input  class="form-control" name="nombre" value="{{$consulta->nombre}}" >
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label">insertar email</label>
                  <input class="form-control" name="email" value="{{$consulta->email}}">
                  <p class="text-danger">{{ $errors->first('email') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">insertar No INE</label>
                    <input  class="form-control" name="ine" value="{{$consulta->ine}}">
                    <p class="text-danger">{{ $errors->first('ine') }}</p>
                  </div>
               
              
            
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Editar Cliente</button>
                  </div>
            
            
              </form>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Canselar</button>
            </div>
              </div>
          </div>
             
    
         
        
        </div>
        </div>

        <div class="modal-footer">
          
   
        </form>
        </div>

      </div>
    </div>
  </div>