<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    @yield('headerdatos')
    <title> @yield('titulo','pig')</title>
  </head> 
  
  <body>
  <div class="d-flex">
		<div id="sidebar-container" class="bg-primary">
			  <div class="logo">
          <h4 class="text-light font-weight-bold" >pig</h4>
        </div>
			  
        <div class="menu">
          <a href="" class="d-block text-light p-3"> <i class="icon ion-md-apps mr-2  lead">  </i>  indicadores </a>
          <a href="/notificaciones" class="d-block text-light p-3"> <i class="icon ion-md-card mr-2  lead">  </i>  Notificaciones</a>
          <a href="/contratos" class="d-block text-light p-3"> <i class="icon ion-md-today mr-2 lead"> </i>  contratos</a>
        </div>
		</div>

    <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="icon ion-md-help"></i></a>
            
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me  -auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"></a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="icon ion-md-settings"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">usuarios</a></li>
                      {{-- <li><a class="dropdown-item" href="#"></a></li> --}}
                      {{-- <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                  </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">hola<i class="icon ion-md-paper"></i></a>
                </li>
                @yield('navmas')
                
                
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
        </nav>
        @yield('contenidopvistax'){{-- aqui empesaron  el contenido de cada vista   --}}
        
        <div id="container">
          <section>
            <div class="container">
              <div class="row">
                <div class="col-lg-9">
                  
              </div>
            </div>
          </section>
        </div>
    </div>
    
   
  </div>

  

  
  
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('scriptdatos')
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
    -->
 @yield('footer')
   
  </body>
</html>