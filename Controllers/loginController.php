<?php
include_once '../Models/loginModel.php';

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if(isset($_POST["btnIniciarSesion"]))
{
    $correoElectronico = $_POST["correoElectronico"];
    $contrasenna = $_POST["contrasenna"];

    $resultado = ValidarLoginModel($correoElectronico, $contrasenna);

    if($resultado -> num_rows > 0)
    {
        $datosResultado = mysqli_fetch_array($resultado);
        $_SESSION["Correo"] = $datosResultado["Correo"];
        $_SESSION["TipoUsuario"] = $datosResultado["TipoUsuario"];

        if($_SESSION["TipoUsuario"] == "Administrador"){
            header("location: ../Views/admin/index.php");

        }else{
            header("location: ../Views/index.php");
        }
    }
    else
    {
        header("location: ../Views/login.php");
    }
}

?>