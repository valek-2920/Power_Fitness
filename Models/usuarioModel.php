<?php
include 'connection.php';

function CrearUsuarioAdministradorModel($PrimerNombre, $PrimerApellido, $SegundoApellido, $FechaNacimiento, $Correo) #admin -> 2
{
    $instancia = Open();

    $contrasenna = generadorContrasenna();
    $sentencia = "CALL CrearUsuario('$PrimerNombre', '$PrimerApellido', '$SegundoApellido', $FechaNacimiento, '$Correo', '$contrasenna', 2);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function CrearUsuarioClienteModel($PrimerNombre, $PrimerApellido, $SegundoApellido, $FechaNacimiento, $Correo) #client -> 1
{
    $instancia = Open();

    $Contrasenna = generadorContrasenna();
    $sentencia = "CALL CrearUsuario('$PrimerNombre', '$PrimerApellido', '$SegundoApellido', $FechaNacimiento, '$Correo', '$Contrasenna', 1);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;     
}


function ObtenerUsuariosModel()
{
    $instancia = Open();

    $sentencia = "CALL ObtenerUsuarios();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerUsuarioModel($UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerUsuario($UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarUsuarioModel($PrimerNombre, $PrimerApellido, $SegundoApellido, $FechaNacimiento, $Correo, $UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL EditarUsuario('$PrimerNombre', '$PrimerApellido', '$SegundoApellido', $FechaNacimiento, '$Correo', $UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EliminarUsuarioModel($UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarUsuario($UsuarioId);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function generadorContrasenna() {
	$length = 12;
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}

?>