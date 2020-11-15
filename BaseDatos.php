<?php


class BaseDatos{

//atributos

public $usuarioBD="root";
public $passwordBD="";


//constructor
public function __construct(){} 


//metodos

public function conectarBD(){
    
    try {

        $datosBD="mysql:host=localhost;dbname=bd_examenm2";
        $conexionBD= new PDO ($datosBD,$this->usuarioBD,$this->passwordBD);
        return($conexionBD);

    }catch (PDOException $error) {

        echo($error->getMessage());
    }


}

public function agregarDatos($consultaSQL){
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar consultas
    $insertarDatos=$conexionBD->prepare($consultaSQL);

    //ejecutar consulta
    $resultado=$insertarDatos->execute();

    //verifico el resultado
    if($resultado){
        echo("producto agregado");
    }else{
    echo("error");
    }


}

public function consultarDatos($consultaSQL){
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //prepara consulta
    $consultarDatos=$conexionBD->prepare($consultaSQL);

    //establecer el metodo de consulta
    $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //Ejecutar operacion en la BD
    $consultarDatos->execute();

    //retorne los datos consultados
    return($consultarDatos->fetchAll());

}
public function eliminarDatos($consultaSQL){
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar
    $eliminarDatos=$conexionBD->prepare($consultaSQL);

    //Ejecutar 
    $resultado=$eliminarDatos->execute();

    //verifico resultado
    if($resultado){
        echo("producto eliminado");
    }else{
    echo("error");
    }

}



    public function editarDatos($consultaSQL){

        //establecer una conexion
        $conexionBD=$this->conectarBD();
   
        //Peparar Consulta
        $editarDatos=$conexionBD->prepare($consultaSQL);
    
        //Ejecutar la consulta
        $resultado= $editarDatos->execute();
    
        //verifico el resultado
        if($resultado){
            echo("usuario Editado");
        }else{
            echo("error");
        }
   
   }

} 


?>