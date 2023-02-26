<?php
include 'connection.php';

function CreateUser()
{
    $instancia = Open();

    $sentencia = "CALL registerUser();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


function GetUsers()
{
    $instancia = Open();

    $sentencia = "CALL getUsers();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function GetUserbyId()
{
    $instancia = Open();

    $sentencia = "CALL getUser();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function UpdateUsers()
{
    $instancia = Open();

    $sentencia = "CALL updateUser();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function DeleteUser()
{
    $instancia = Open();

    $sentencia = "CALL removeUser();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


?>