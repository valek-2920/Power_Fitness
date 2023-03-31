<?php
include 'connection.php';

function CrearEstadisticasModel($Altura, $Peso, $Fecha, $UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL CrearEstadisticas($Altura, $Peso, $Fecha, $UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


function ObtenerEstadisticasModel($UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerEstadisticas('$UsuarioId');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerEstadisticaModel($EstadisticasId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerEstadistica($EstadisticasId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarEstadisticasModel($Altura, $Peso, $Fecha, $UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL EditarEstadisticas($Altura, $Peso, $Fecha, $UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EliminarEstadisticasModel($EstadisticasId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarEstadisticas('$EstadisticasId');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


?>