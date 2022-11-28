
  <!-- Modal -->
  <div class="modal fade" id="2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black">Agregar Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-align: center">

          <div class="card-body" style="background-color: black">
          <div class="modal-body">

              <div class="card-body">
                <form action="guardar_recuerdo2" method="post">
                  @csrf
                  <h2 style="text-align: center">Agregar libro</h2>
             
              </div>
              <div class="card-body" style="background-color: black">
      
                  <h4 style="text-align: center" >Titulo</h4>
                  <br>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="a">
                  <p class="text-danger fst-italic">{{ $errors->first('a') }}</p>
                    <h4 style="text-align: center">recuerdo</h4>
                    <br>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"name="b">
                    <p class="text-danger fst-italic">{{ $errors->first('b') }}</p>
                
              
              </div>
              <div class="card-footer text-muted">
                
                  <button type="submit"  class="btn btn-success" >Ingresar</button>
              </div>
          </form>
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