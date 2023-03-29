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

?>