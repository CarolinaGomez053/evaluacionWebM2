<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>


<body>

<header>

  <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #D7BDE2;">
    <a class="navbar-brand" href="#">LAYDOS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="formulario.php">Ingreso Productos<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="listaProductos.php">Productos<span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

</header>

<main>
<div class="container">
  <form form action="registrarProductos.php" method="POST">
    <br>
    <h2>Ingreso de productos</h2>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre del producto</label>
            <input type="text" class="form-control" id="inputEmail4" name="nombre">
          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Marca</label>
            <input type="text" class="form-control" id="inputPassword4" name="marca">
          </div>

        </div>
        <div class="form-group">
          <label for="inputAddress">Precio del producto</label>
          <input type="text" class="form-control" id="inputAddress" name="precio">
        </div>

            
      <div class="row mt-3">
                    
      <div class="col">
         <label class="font-weight-bold">Foto:</label>
          <input type="text" class="form-control" placeholder="URL FOTOGRAFIA" name="foto">
          </div>
     </div>


      <br>
        <div class="form-group">
          <label for="inputAddress2">Descripción</label>
          <input type="text" class="form-control" id="inputAddress2" name="descripcion">
        </div>

    
      
      <button type="submit" class="btn btn-primary" name="botonEnvio" >Registrar</button>

      
  
  </form>





</div>





</main>

    
</body>
</html>