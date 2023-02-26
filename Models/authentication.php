<?php
include 'connection.php';

function RegisterModel($correoElectronico, $contrasenna)
{
    $instancia = Open();
    $query = "CALL registerUser('$correoElectronico','$contrasenna');";
    $resultado = $instancia -> query($query);

    Close($instancia);
    return $resultado;    
}

function LoginUser($correoElectronico, $contrasenna)
{
    $instancia = Open();
    $query = "CALL LoginUser('$correoElectronico','$contrasenna');";
    $resultado = $instancia -> query($query);

    Close($instancia);
    return $resultado;    
}


?>