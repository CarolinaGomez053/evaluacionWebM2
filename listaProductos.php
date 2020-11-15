<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
<?php
include("BaseDatos.php");
//1. crear un objeto de la clase BaseDatos
$transaccion=new BaseDatos();

//2. Definir la consulta para buscar datos

$consultaSQL="SELECT * FROM formulario WHERE 1";

//3. ejecutar el metodo consultarDatos() y almacenar la respuesta en una variable
$productos=$transaccion->consultarDatos($consultaSQL);



?>
<main>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3">

    <?php   foreach($productos as $productos): ?>

        <div class="col mb-4">
            <div class="card">
                <img src="<?php echo($productos["Foto"])?>" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h3 class="card-title"><?php echo($productos["Nombre"])?></h3>
                    <h3 class="card-title"><?php echo($productos["Marca"])?></h3>
                    <p class="card-text"><?php echo($productos["Descripción"]) ?></p>
                    <a href="eliminarProductos.php?id=<?php echo($productos['id'])?>" class="btn btn-danger">Eliminar</a>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($productos["id"])?>">
                    Editar
                    </button>

                </div>
            </div>

            <div class="modal fade" id="editar<?php echo($productos["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edición de producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editarProducto.php?id=<?php echo($productos["id"])?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($productos["Nombre"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descEditar"><?php echo($productos["Descripción"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




    <?php    endforeach ?>
    </div>

    </div>
</main>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

</body>
</html>