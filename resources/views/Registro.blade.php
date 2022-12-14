<!doctype html>
<html lang="en">
  <head>
    @include('modal_1')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros</title>

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
                    <a class="nav-link active" aria-current="page" style="color: aliceblue" href="{{route('mostrar.libros')}}">Libros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color: aliceblue" href="{{route('mostrar.Clientes')}}">Clientes</a>
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
    @if($errors->any())
           
            <br>
            <div class="alert alert-warning" role="alert">
               error
            </div>
            <br>
          
        @endif
 @if (session()->has('m1'))
 <br>
 <div class="alert alert-success" role="alert">
    Libro {{session("m1")["titulo"]}} guardado con exito
 </div>
 <br>
 @endif
 @if (session()->has('m3'))
 <br>
 <div class="alert alert-success" role="alert">
    Libro Eliminado con exito
 </div>
 <br>
 @endif
 @if (session()->has('m2'))
 <br>
 <div class="alert alert-success" role="alert">
    Libro Editado con exito
 </div>
 <br>
 @endif
    <div class="container col-md-8" style="background-color: darkgrey">
 <br>
 
<table class="table table-dark table-hover">
  <tr>
    <td>
      <table class="table table-dark table-hover">   
        <tbody>
            <tr>
                <td>ISBN</td>
                <td>Titulo</td>
                <td>Autor</td>
                <td>Pagina</td>
                <td>Editorial</td>
                <td>Email</td>
                <td>Editar</td>
                <td>Eliminar</td>
                </tr>
        <tr>
        @foreach($Datos as $consulta)       
     
        @include('modal_2')
        @include('modal_3')
        <td> <a>{{$consulta->ISBN}}</a></td>
        <td> <a>{{$consulta->TITULO}}</a></td>
        <td> <a>{{$consulta->AUTOR}}</a></td>
        <td> <a>{{$consulta->PAGINAS}}</a></td>
        <td> <a>{{$consulta->EDITORIAL}}</a></td>
        <td> <a>{{$consulta->EMAIL}}</a></td>
        <td> 
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_2{{$consulta->id}}">
                Editar
            </button>
        </td>
        <td> 
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_3{{$consulta->id}}">
            eliminar
        </button>
        
        </td>
        </tr>   
        @endforeach
        </tbody>
         </table>

    </td>
    <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_1">
        Agregar
      </button>
    </td>
  </tr>
</table>

        </div>
      </div>
    
    </div>
  <div>
    <br>
    <br>
    <div class="alert alert-light" role="alert alert-warning mt-5" role="alert" style="background-color: rgb(63, 63, 138)" >
      <div style="text-align: center">
      <p style="color: blanchedalmond" style="text-align: center">
      biblioteca, copyright ??, 
     @php
           echo date("d-m-y");
     @endphp
      </p>
      </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>