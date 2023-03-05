<?php
include 'connection.php';

function CrearDireccionModel($Provincia, $Ciudad, $CodigoPostal, $DireccionExacta, $UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL CrearDireccion('$Provincia', '$Ciudad', $CodigoPostal, '$DireccionExacta', $UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


function ObtenerDireccionesModel($UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerDirecciones('$UsuarioId');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerDireccionModel($DireccionId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerDireccion('$DireccionId');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarDireccionModel($Provincia, $Ciudad, $CodigoPostal, $DireccionExacta, $UsuarioId )
{
    $instancia = Open();

    $sentencia = "CALL EditarDireccion('$Provincia', '$Ciudad', $CodigoPostal, '$DireccionExacta', $UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EliminarDireccionModel($DireccionId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarDireccion('$DireccionId');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


?>