<?php
include 'connection.php';

function CrearEstadisticasModel($Altura, $Peso, $Fecha, $UsuarioId)
{
    $instancia = Open();
    echo $Fecha;
    $sentencia = "CALL CrearEstadisticas($Altura, $Peso, '$Fecha', $UsuarioId);";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerEstadisticasModel()
{
    $instancia = Open();

    $sentencia = "CALL ObtenerEstadisticas();";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;    
}
function ObtenerEstadisticasUsuarioModel($UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerEstadisticasUsuario($UsuarioId);";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerEstadisticaModel($EstadisticasId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerEstadistica($EstadisticasId);";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarEstadisticasModel($EstadisticasId, $Altura, $Peso, $Fecha)
{
    $instancia = Open();

    $sentencia = "CALL EditarEstadisticas($Altura, $Peso, '$Fecha', $EstadisticasId);";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EliminarEstadisticasModel($EstadisticasId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarEstadisticas($EstadisticasId)";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}
function ListaUsuariosModel()
{
    $instancia = Open();

    $sentencia = "CALL ObtenerUsuarios()";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}
