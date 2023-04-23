<?php
include_once '../Models/usuarioModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function VerDatosUsuarios()
{
    $resultado = ObtenerUsuariosModel();
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            $nombreCompleto = $datosResultado["PrimerNombre"] . " " . $datosResultado["PrimerApellido"] . " " . $datosResultado["SegundoApellido"];

            echo "<tr>";
            echo "<td>" . $datosResultado["Correo"] . "</td>";
            echo "<td>" . $nombreCompleto . "</td>";
            echo "<td>" . $datosResultado["DescEstado"] . "</td>";
            echo "<td>" . $datosResultado["Nombre"] . "</td>";

            if ($_SESSION["Correo"] == $datosResultado["Correo"]) {
                echo "<td>" . "<a href='../Views/update_user_admin.php?q=" . $datosResultado["UsuarioId"] . "'>Actualizar</a> | 
                               <a href='#' style='cursor:not-allowed'>Inactivar</a>" . "</td>";
            } else if ($datosResultado["DescEstado"] == "Inactivo") {
                echo "<td>" . "<a href='../Views/update_user_admin.php?q=" . $datosResultado["UsuarioId"] . "'>Actualizar</a> | 
                <a href='#' onclick='ActivarUsuario(" . $datosResultado["UsuarioId"] . ");'>Activar</a>" . "</td>";
            } else {
                echo "<td>" . "<a href='../Views/update_user_admin.php?q=" . $datosResultado["UsuarioId"] . "'>Actualizar</a> | 
                               <a href='#' onclick='InactivarUsuario(" . $datosResultado["UsuarioId"] . ");'>Inactivar</a>" . "</td>";
            }
            echo "</tr>";
        }
    }
}

function mostrarFotoPerfil()
{
    if ($_SESSION["Genero"] == 'M') {
        echo '<div class="pro-img"><img src="images/male_icon.png" alt="user"></div>';
    } else {
        echo '<div class="pro-img"><img src="images/woman_icon.png" alt="user"></div>';
    }
}


function VerDatosUsuario($consecutivoUsuario)
{
    $resultado = ObtenerUsuarioModel($consecutivoUsuario);
    if ($resultado->num_rows > 0) {
        return mysqli_fetch_array($resultado);
    }
}

if (isset($_GET["inactivarUsuario"])) {
    $resultado = InactivarUsuarioModel($_GET["inactivarUsuario"]);

    if ($resultado) {
        echo "Inactivado";
    } else {
        echo "Error";
    }
}

if (isset($_GET["activarUsuario"])) {
    $resultado = ActivarUsuarioModel($_GET["activarUsuario"]);

    if ($resultado) {
        echo "activado";
    } else {
        echo "Error";
    }
}

if (isset($_GET["VerificarExisteCorreo"])) {
    $resultado = VerificarExisteCorreoModel($_GET["correoElectronico"]);

    if ($resultado->num_rows > 0) {
        echo "Ya hay un usuario registrado con este correo";
    } else {
        echo "OK";
    }
}

if (isset($_POST["btnRegistrarCuentaCliente"])) {
    $primerNombre = $_POST["primerNombre"];
    $primerApellido = $_POST["primerApellido"];
    $segundoApellido = $_POST["segundoApellido"];
    $genero = $_POST["genero"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $celular = $_POST["celular"];
    $direccion = $_POST["provincia"] . ", " . $_POST["ciudad"] . ", " . $_POST["direccionExacta"];
    $correoElectronico = $_POST["correoElectronico"];
    $contrasenna = $_POST["contrasenna"];

    $date = new DateTime($fechaNacimiento);
    $fechaNacimiento = $date->format('Y/m/d');

    $resultado = CrearUsuarioClienteModel($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $correoElectronico, $contrasenna);

    if ($resultado == true) {
        header("location: ../Views/login.php");
        echo '<script type="text/javascript">
        alert(Usuario creado exitosamente!);
        </script>';
    } else {
        header("location: ../Views/login.php");
        echo '<script type="text/javascript">
        alert(No se pudo registrar su cuenta);
        </script>';
    }
}

if (isset($_POST["btnRegistrarCuenta"])) {
    $primerNombre = $_POST["primerNombre"];
    $primerApellido = $_POST["primerApellido"];
    $segundoApellido = $_POST["segundoApellido"];
    $correoElectronico = $_POST["correoElectronico"];
    $genero = $_POST["genero"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $celular = $_POST["celular"];
    $direccion = $_POST["provincia"] . ", " . $_POST["ciudad"] . ", " . $_POST["direccionExacta"];
    $contrasenna = $_POST["contrasenna"];

    $date = new DateTime($fechaNacimiento);
    $fechaNacimiento = $date->format('Y/m/d');

    $resultado = CrearUsuarioAdministradorModel($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $correoElectronico, $contrasenna);

    if ($resultado == true) {
        header("location: ../Views/index_admin.php");
        echo '<script type="text/javascript">
        alert(Usuario creado exitosamente!);
        </script>';
    } else {
        header("location: ../Views/index_admin.php");
        echo '<script type="text/javascript">
        alert(No se pudo registrar su cuenta);
        </script>';
    }
}

if (isset($_POST["btnActualizarUsuarioCliente"])) {
    $usuarioId = $_POST["usuarioId"];
    $primerNombre = $_POST["primerNombre"];
    $primerApellido = $_POST["primerApellido"];
    $segundoApellido = $_POST["segundoApellido"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $genero = $_POST["genero"];
    $celular = $_POST["celular"];
    $direccion = $_POST["provincia"] . ", " . $_POST["ciudad"] . ", " . $_POST["direccionExacta"];

    $date = new DateTime($fechaNacimiento);
    $fechaNacimiento = $date->format('Y/m/d');

    $resultado = EditarUsuarioModelCiente($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $usuarioId);

    if ($resultado == true) {
        $_SESSION["NombreUsuario"] = $primerNombre . " " . $primerApellido . " " . $segundoApellido;
        $_SESSION["Genero"] = $datosResultado["Genero"];

        header("location: ../Views/profile.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}

if (isset($_POST["btnActualizarUsuarioAdmin"])) {
    $usuarioId = $_POST["usuarioId"];
    $primerNombre = $_POST["primerNombre"];
    $primerApellido = $_POST["primerApellido"];
    $segundoApellido = $_POST["segundoApellido"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $genero = $_POST["genero"];
    $celular = $_POST["celular"];
    $direccion = $_POST["provincia"] . ", " . $_POST["ciudad"] . ", " . $_POST["direccionExacta"];
    $contrasenna = $_POST["contrasenna"];

    $date = new DateTime($fechaNacimiento);
    $fechaNacimiento = $date->format('Y/m/d');

    $resultado = EditarUsuarioModelAdmin($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $genero, $celular, $direccion, $contrasenna, $usuarioId);

    if ($resultado == true) {
        header("location: ../Views/index_admin.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}

if (isset($_POST["btnRecuperarCuenta"])) {
    $correoElectronico = $_POST["correoElectronico"];
    $resultado = VerificarExisteCorreoModel($correoElectronico);

    if ($resultado->num_rows > 0) {
        $datosResultado = mysqli_fetch_array($resultado);

        $mensaje = "La contraseña de su cuenta es: " . $datosResultado["contrasenna"];
        EnviarCorreo($datosResultado["correo"], 'Recuperación de contraseña', $mensaje, null);
    }
}

if (isset($_POST["btnNotificar"])) {
    $correoElectronico = $_POST["correoElectronico"];
    $nombreAdjunto = "../Files/" . $_FILES["adjunto"]["name"];
    move_uploaded_file($_FILES["adjunto"]["tmp_name"], $nombreAdjunto);

    EnviarCorreo($correoElectronico, 'Practica 2', 'Por favor revise el archivo adjunto', $nombreAdjunto);
    unlink($nombreAdjunto);
}


if (isset($_POST["btnContacto"])) {
    $nombre = $_POST["nombre"];
    $correoElectronico = $_POST["correoElectronico"];
    $mensaje = "La persona " . $nombre . ", correo " . $correoElectronico . ". Realizo la siguiente consulta: " . $_POST["mensaje"];

    EnviarCorreo("fitnesspower725@outlook.com", 'Consulta de ' . $nombre, $mensaje, null);
}

function EnviarCorreo($destinatario, $asunto, $cuerpo, $pdf)
{
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $correoSalida = "fitnesspower725@outlook.com";
    $contrasennaSalida = "TheRedPandas#074";

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    $mail->IsSMTP();
    $mail->Host = 'smtp.office365.com'; // smtp.gmail.com     
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // 465 // 25                               
    $mail->SMTPAuth = true;
    $mail->Username = $correoSalida;
    $mail->Password = $contrasennaSalida;

    $mail->SetFrom($correoSalida, "Power Fitness");
    $mail->Subject = $asunto;
    $mail->MsgHTML($cuerpo);
    $mail->AddAddress($destinatario, 'Usuario Sistema');

    if ($pdf != null) {
        $mail->AddAttachment($pdf);
    }

    $mail->send();
}
