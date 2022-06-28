<?php


    $nombre = $_POST["nombre"] ?? '';
    $apellido = $_POST["apellido"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';
 
    $respuesta = [];
    $bandera = true;

    if($nombre == ''){
        $respuesta += ['nombre' => 'Ingres un nombre'];
        $bandera= false;
    }

    if($apellido == ''){
        $respuesta += ['apellido' => 'Ingrese un apelllido']; 
        $bandera= false;
    }

    if($correo == '' ){
        $respuesta += ['correo' => 'Ingrese un correo'];

        $bandera= false;
    }

    if($mensaje == '' ){
        $respuesta += ['mensaje' => 'Ingrese un mensaje'];
        $bandera= false;
    }

    if($bandera){

    }


    echo json_encode($respuesta);