<?php
include_once '../Models/usuariosModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function VerDatosUsuarios()
{
    $resultado = ObtenerUsuariosModel($_SESSION["CorreoElectronico"], $_SESSION["TipoUsuario"]);
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $datosResultado["CorreoElectronico"] . "</td>";
            echo "<td>" . $datosResultado["Identificacion"] . "</td>";
            echo "<td>" . $datosResultado["Nombre"] . "</td>";
            echo "<td>" . $datosResultado["DescEstado"] . "</td>";
            echo "<td>" . $datosResultado["NombreTipoUsuario"] . "</td>";

            if ($_SESSION["CorreoElectronico"] == $datosResultado["CorreoElectronico"]) {
                echo "<td>" . "<a href='../Views/actualizarUsuario.php?q=" . $datosResultado["ConsecutivoUsuario"] . "'>Actualizar</a> | 
                               <a href='#' style='cursor:not-allowed'>Inactivar</a>" . "</td>";
            } else if ($datosResultado["DescEstado"] == "Inactivo") {
                echo "<td>" . "<a href='../Views/actualizarUsuario.php?q=" . $datosResultado["ConsecutivoUsuario"] . "'>Actualizar</a> | 
                <a href='#' onclick='ActivarUsuario(" . $datosResultado["ConsecutivoUsuario"] . ");'>Activar</a>" . "</td>";
            } else {
                echo "<td>" . "<a href='../Views/actualizarUsuario.php?q=" . $datosResultado["ConsecutivoUsuario"] . "'>Actualizar</a> | 
                               <a href='#' onclick='InactivarUsuario(" . $datosResultado["ConsecutivoUsuario"] . ");'>Inactivar</a>" . "</td>";
            }

            echo "</tr>";
        }
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
    $fechaNacimiento = \DateTime::createFromFormat('m/d/Y', $_POST["fechaNacimiento"]);
    $correoElectronico = $_POST["correoElectronico"];
    $contrasenna = $_POST["contrasenna"];

    $resultado = CrearUsuarioClienteModel($primerNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $correoElectronico, $contrasenna);

    if ($resultado == true) {
        echo $resultado;
        header("location: ../Views/index.php");
    } else {
        echo $resultado;
        echo "No se pudo registrar su cuenta";
    }
}

if (isset($_POST["btnActualizarUsuario"])) {
    $identificacion = $_POST["identificacion"];
    $nombre = $_POST["nombre"];
    $rol = $_POST["rol"];
    $contrasenna = $_POST["contrasenna"];
    $consecutivo = $_POST["consecutivo"];

    $resultado = EditarUsuarioModel($PrimerNombre, $PrimerApellido, $SegundoApellido, $FechaNacimiento, $Correo, $UsuarioId);

    if ($resultado == true) {
        header("location: ../Views/usuarios.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}

if (isset($_POST["btnRecuperarCuenta"])) {
    $correoElectronico = $_POST["correoElectronico"];
    $resultado = VerificarExisteCorreoModel($correoElectronico);

    if ($resultado->num_rows > 0) {
        $datosResultado = mysqli_fetch_array($resultado);

        $mensaje = "La contraseña de su cuenta es: " . $datosResultado["Contrasenna"];
        EnviarCorreo($datosResultado["CorreoElectronico"], 'Recuperación de contraseña', $mensaje, null);
    }
}

// // if (isset($_POST["btnNotificar"])) {
// //     $correoElectronico = $_POST["correoElectronico"];
// //     $nombreAdjunto = "../Files/" . $_FILES["adjunto"]["name"];
// //     move_uploaded_file($_FILES["adjunto"]["tmp_name"], $nombreAdjunto);

// //     EnviarCorreo($correoElectronico, 'Practica 2', 'Por favor revise el archivo adjunto', $nombreAdjunto);
// //     unlink($nombreAdjunto);
// // }

function EnviarCorreo($destinatario, $asunto, $cuerpo, $pdf)
{
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $correoSalida = "@hotmail.com";
    $contrasennaSalida = "";

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    $mail->IsSMTP();
    $mail->Host = 'smtp.office365.com'; // smtp.gmail.com     
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // 465 // 25                               
    $mail->SMTPAuth = true;
    $mail->Username = $correoSalida;
    $mail->Password = $contrasennaSalida;

    $mail->SetFrom($correoSalida, "Sistema Profesores");
    $mail->Subject = $asunto;
    $mail->MsgHTML($cuerpo);
    $mail->AddAddress($destinatario, 'Usuario Sistema');

    if ($pdf != null) {
        $mail->AddAttachment($pdf);
    }

    $mail->send();
}
function VerPerfiles($TipoUsuario)
{
    $resultado = VerPerfilesModel();
    if ($resultado->num_rows > 0) {
        if ($TipoUsuario == 1) {
            while ($datosResultado = mysqli_fetch_array($resultado)) {
                if ($TipoUsuario == $datosResultado["TipoUsuario"]) {
                    echo "<option value=" . $datosResultado["TipoUsuario"] . " selected>" . $datosResultado["NombreTipoUsuario"] . "</option>";
                } else {
                    echo "<option value=" . $datosResultado["TipoUsuario"] . ">" . $datosResultado["NombreTipoUsuario"] . "</option>";
                }
            }
        } else {
            while ($datosResultado = mysqli_fetch_array($resultado)) {
                if ($TipoUsuario == $datosResultado["TipoUsuario"]) {
                    echo "<option value=" . $datosResultado["TipoUsuario"] . " selected>" . $datosResultado["NombreTipoUsuario"] . "</option>";
                }
            }
        }
    }
}
