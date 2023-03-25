<?php
include 'connection.php';

function ValidarLoginModel($Correo, $Contrasenna)
{
    $instancia = Open();
    $query = "CALL ValidarInicioSesion('$Correo','$Contrasenna');";
    $resultado = $instancia -> query($query);

    Close($instancia);
    return $resultado;    
}

function ValidarCorreoModel($Correo){
    $instancia = Open();
    $query = "CALL ValidarCorreo('$Correo');";
    $resultado = $instancia -> query($query);

    Close($instancia);
    return $resultado; 
}


?>