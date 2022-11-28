<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <img src="https://th.bing.com/th/id/OIP.GzVI_MdHn8TZ9MXcySccLwHaHa?w=209&h=209&c=7&r=0&o=5&pid=1.7"
                     width="60px"
                     height="50px">
                    
                  </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" style="color: aliceblue">biblioteca</a>
                </li>
                  <li class="nav-item">
                    <a  class="nav-link active" aria-current="page" style="color: aliceblue" href="/">Principal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color: aliceblue" href="1">Registro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color: aliceblue" href="2">Registrar Cliente</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

</head>

  <body>
    <br>
<div >
    <br>
    <div class="container col-md-4" style="background-color: darkgrey">
 <br>
@if (session()->has('mensaje'))
<br>
<div class="alert alert-success" role="alert">
  Todo correcto: Libro “{{session('mensaje')['titulo']}}” guardado
</div>
<br>
@endif
     

<form action="Informacion" method="POST" >
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
      </div>
  

      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>


  </form>
        </div>
      </div>

    </div>
  <div>
    <br>
    <br>
    <div class="alert alert-light" role="alert alert-warning mt-5" role="alert" style="background-color: rgb(63, 63, 138)" >
      <div style="text-align: center">
      <p style="color: blanchedalmond" style="text-align: center">
      biblioteca, copyright ©, 
     @php
           echo date("d-m-y");
     @endphp
      </p>
      </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>