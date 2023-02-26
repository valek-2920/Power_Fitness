<?php

function Open()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "power_fitness";
    
    return new mysqli($servername, $username, $password, $db);
}

function Close($instancia)
{
    mysqli_close($instancia);
}

?>