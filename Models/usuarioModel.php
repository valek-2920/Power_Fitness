<?php
include 'connection.php';

function CrearUsuarioAdministradorModel($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $correoElectronico, $contrasenna) #admin -> 4
{
    $instancia = Open();
    $sentencia = "CALL CrearUsuario('$primerNombre', '$primerApellido', '$segundoApellido', '$fechaNacimiento', '$genero', $celular, '$direccion', '$correoElectronico', '$contrasenna', 4)";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function CrearUsuarioClienteModel($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $correoElectronico, $contrasenna) #cliente -> 5
{
    $instancia = Open();
    echo $fechaNacimiento;
    $sentencia = "CALL CrearUsuario('$primerNombre', '$primerApellido', '$segundoApellido', '$fechaNacimiento', '$genero', $celular, '$direccion', '$correoElectronico', '$contrasenna', 5)";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function VerificarExisteCorreoModel($correoElectronico)
{
    $instancia = Open();
    $sentencia = "CALL ValidarCorreo('$correoElectronico')";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function ObtenerUsuariosModel()
{
    $instancia = Open();
    $sentencia = "CALL ObtenerUsuarios()";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function ObtenerUsuarioModel($UsuarioId)
{
    $instancia = Open();
    $sentencia = "CALL ObtenerUsuario($UsuarioId)";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function EditarUsuarioModelCiente($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $usuarioId)
{
    $instancia = Open();
    $sentencia = "CALL EditarUsuarioCliente('$primerNombre', '$primerApellido', '$segundoApellido', '$fechaNacimiento', '$genero', $celular, '$direccion', $usuarioId)";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}
function EditarUsuarioModelAdmin($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $contrasenna, $usuarioId)
{
    $instancia = Open();
    $sentencia = "CALL EditarUsuarioAdmin('$primerNombre', '$primerApellido', '$segundoApellido', '$fechaNacimiento', '$genero', $celular, '$direccion', '$contrasenna', $usuarioId)";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function InactivarUsuarioModel($UsuarioId)
{
    $instancia = Open();
    $sentencia = "CALL InactivarUsuario($UsuarioId)";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function ActivarUsuarioModel($UsuarioId)
{
    $instancia = Open();
    $sentencia = "CALL ActivarUsuario($UsuarioId)";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}
