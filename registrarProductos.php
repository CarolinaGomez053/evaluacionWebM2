<?php
include ('BaseDatos.php');

if (isset($_POST ["botonEnvio"])) {

    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $foto=$_POST['foto'];
    $descripcion=$_POST['descripcion'];
    
    //copia u objeto de la clase bd
    $transaccion=new BaseDatos();
    
    $transaccion->conectarBD();
    
    //crear consulta
    $consultaSQL="INSERT INTO formulario(Nombre, Marca,Precio,Descripción,Foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";
    
    //llamo al metodo de la clase BD agregar datos
    $transaccion->agregarDatos($consultaSQL);
    
    //redirection
    header("location:formulario.php");

    
 
}



?>