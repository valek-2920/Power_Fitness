<?php
include 'connection.php';

function CrearRolModel($Nombre, $Descripcion)
{
    $instancia = Open();

    $sentencia = "CALL CrearRol('$Nombre','$Descripcion');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


function ObtenerRolesModel()
{
    $instancia = Open();

    $sentencia = "CALL ObtenerRoles();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerRolModel($RolId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerRol($RolId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarRolModel($RolId, $Nombre, $Descripcion )
{
    $instancia = Open();

    $sentencia = "CALL EditarRol($RolId, '$Nombre', '$Descripcion');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EliminarRolModel($RolId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarRol($RolId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


?>