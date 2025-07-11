<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand bg-dark border-bottom border-body" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP CURSO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    contactanos
                  </a>
                 
                </li>
               
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
        </nav>


       </header>
      
        <div class="container"> 
          <div class="row">
            <div class="col-9">
              
              <div class="row">
                <h1 class="col-6">
                  hola mundo
                </h1>
  
                <img src="https://cdn.pixabay.com/photo/2023/03/16/08/42/camping-7856198_640.jpg" alt="" width="300" class="col-6">
        

              </div> 
             
          </div>
          <div class="col-3">
            <h1>
              historia del paisaje
            </h1>
            <img src="https://cdn.pixabay.com/photo/2023/03/16/08/42/camping-7856198_640.jpg" alt="" width="300">

          
          </div>
            
        </div>


        


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

   <form action="Controller/Registro.php" method="POST">

    <div class="row">
      <div class="col">
          <input type="text" class="form-control" placeholder="Ingrese tu nombre" name="nombre">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Ingrese tu Apellido" name="apellido">

      </div>

      <div class="row">
            <div class="col">
          <input type="text" class="form-control" placeholder="Ingrese tu documento" name=id>
      </div>
      <div class="col">
        <input type="email" class="form-control" placeholder="Ingrese tu correo" name="correo">
    </div>
    <div class="row">
      <div class="col">
          <input type="text" class="form-control" placeholder="Ingrese tu edad" name="edad">
      </div>
       <div class="col">
        <input type="text" class="form-control" placeholder="Ingrese tu telefono" name="tel">
    </div>
    </div>
    <button>registrarse<button>
   </form>

    <!-- Modal genérico -->
<div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensajeModalLabel">Resultado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" id="mensajeTexto">
        <!-- Aquí va el mensaje dinámico -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    
   <script src ="js/modal.js"></script>



    </body>

    



</html>