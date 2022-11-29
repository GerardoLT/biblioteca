
  <!-- Modal -->
  <div class="modal fade" id="Modal_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal_1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black">Editar Libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-align: center">

       
          <div class="modal-body">
            <div style="background-color: grey">
              <form action="guardar" method="POST" >
                @csrf
                <div class="mb-3">
                  <label class="form-label">insertar ISBN</label>
                  <input  class="form-control" name="ISBN" value="{{old("ISBN")}}" >
                  <p class="text-danger">{{ $errors->first('ISBN') }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label">insertar Titulo</label>
                  <input class="form-control" name="titulo" value="{{old("titulo")}}">
                  <p class="text-danger">{{ $errors->first('titulo') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">insertar Autor</label>
                    <input  class="form-control" name="Autor" value="{{old("Paginas")}}">
                    <p class="text-danger">{{ $errors->first('Paginas') }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">insertar Paginas</label>
                    <input class="form-control" name="Paginas" value="{{old("Paginas")}}" >
                    <p class="text-danger">{{ $errors->first('Paginas') }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">insertar editorial</label>
                    <input  class="form-control" name="editorial" value="{{old("editorial")}}">
                    <p class="text-danger">{{ $errors->first('editorial') }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">insertar Mail de la Editorial</label>
                    <input class="form-control" name="Mail_Editorial" value="{{old("Mail_Editorial")}}">
                    <p class="text-danger">{{ $errors->first('Mail_Editorial') }}</p>
                    <br>
                  </div>
              
            
               
            
                 
    
              </div>
            
            <div class="modal-footer">
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Agregar</button>
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