<?php 

include("BaseDatos.php");

//1. Crear el objeto de la BD
$transaccion=new BaseDatos();



    if(isset($_POST["botonEditar"])){

            
  
        $id=$_GET["id"];
        $nombre=$_POST['nombreEditar'];
        $descripcion=$_POST['descEditar'];

        //4.consulta para editar un registro
        $consultaSQL="UPDATE formulario SET Nombre='$nombre',Descripción='$descripcion' WHERE id='$id'";
        

        //5.Utilizar el metodo editar
        $transaccion->editarDatos($consultaSQL);

        header("location:listaProductos.php");


    }

    






?>