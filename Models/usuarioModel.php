<?php
include 'connection.php';

function CrearUsuarioAdministradorModel($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $correoElectronico, $contrasenna) #admin -> 4
{
    $instancia = Open();
    $sentencia = "CALL CrearUsuario('$primerNombre', '$primerApellido', '$segundoApellido', $fechaNacimiento, '$correoElectronico', '$contrasenna', 4)";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function CrearUsuarioClienteModel($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $correoElectronico, $contrasenna) #client -> 5
{
    $instancia = Open();
    echo $fechaNacimiento;
    $sentencia = "CALL CrearUsuario('$primerNombre', '$primerApellido', '$segundoApellido', '$fechaNacimiento', '$correoElectronico', '$contrasenna', 5)";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;     
}

function VerificarExisteCorreoModel($correoElectronico)
{
    $instancia = Open();
    $sentencia = "CALL ValidarCorreo('$correoElectronico')";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;        
}

function ObtenerUsuariosModel()
{
    $instancia = Open();
    $sentencia = "CALL ObtenerUsuarios()";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerUsuarioModel($UsuarioId)
{
    $instancia = Open();
    $sentencia = "CALL ObtenerUsuario($UsuarioId)";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarUsuarioModel($PrimerNombre, $PrimerApellido, $SegundoApellido, $FechaNacimiento, $Correo, $UsuarioId)
{
    $instancia = Open();
    $sentencia = "CALL EditarUsuario('$PrimerNombre', '$PrimerApellido', '$SegundoApellido', $FechaNacimiento, '$Correo', $UsuarioId)";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function InactivarUsuarioModel($UsuarioId)
{
    $instancia = Open();
    $sentencia = "CALL InactivarUsuario($UsuarioId)";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ActivarUsuarioModel($UsuarioId)
{
    $instancia = Open();
    $sentencia = "CALL ActivarUsuario($UsuarioId)";
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

function VerPerfilesModel()
{
    $instancia = Open();
    $sentencia = "CALL VerPerfiles();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;   
}

?>