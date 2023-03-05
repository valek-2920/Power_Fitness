<?php
include 'connection.php';

function CrearTelefonoModel($Telefono, $UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL CrearTelefono($Telefono,$UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


function ObtenerTelefonosModel($UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerTelefonos($UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerTelefonoModel($TelefonoId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerTelefono($TelefonoId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarTelefonoModel($Telefono, $TelefonoId )
{
    $instancia = Open();

    $sentencia = "CALL 	EditarTelefono($Telefono, $TelefonoId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EliminarTelefonoModel($TelefonoId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarTelefono($TelefonoId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


?>