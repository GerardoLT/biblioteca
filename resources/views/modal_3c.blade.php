
  <!-- Modal -->
  <div class="modal fade" id="Modal_3c{{$consulta->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal_3c" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black">Eliminar Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-align: center">

       
          <div class="modal-body">
            <div style="background-color: grey">
              <form action="{{route('dead2',$consulta->idCliente)}}" method="POST" >
                @csrf
                {!!method_field('PUT')!!}
                <div class="mb-3">
                  <label class="form-label">insertar nombre completo</label>
                 <h3>{{$consulta->nombre}}</h3>
                </div>
                <div class="mb-3">
                  <label class="form-label">insertar email</label>
                  <h3>{{$consulta->email}}</h3>
                </div>
                <div class="mb-3">
                    <label class="form-label">insertar No INE</label>
                    <h3>{{$consulta->ine}}</h3>
                  </div>
               
              
            
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">eliminar cliente</button>
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