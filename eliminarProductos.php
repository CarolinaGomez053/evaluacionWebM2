<?php

    include("BaseDatos.php");

    //1.1. recibo ID que voy eliminar

    $id=($_GET["id"]);

    //2.Crear objeto de la clase BD
    $transaccion=new BaseDatos();

    //3.Crear la consulta para eliminar
    $consultaSQL="DELETE FROM formulario WHERE id='$id'";

    //ejecutar el metodo
    $transaccion->eliminarDatos($consultaSQL);

        
    //redirection
    header("location:listaProductos.php");
?>