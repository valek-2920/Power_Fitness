<?php
include_once '../Models/membresiasModel.php';
require __DIR__ . '/../vendor/autoload.php';

function VerDatosMembresias()
{
    $resultado = ObtenerMembresiasModel();

    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $datosResultado["Nombre"] . "</td>";
            echo "<td>" . $datosResultado["Descripcion"] . "</td>";
            echo "<td>" . $datosResultado["Precio"] . ".000" . "</td>";
            echo "<td>" . "<a href='../Views/update_membership.php?q=" . $datosResultado["MembresiaId"] . "'>Actualizar</a> | 
            <a href='#' onclick='EliminarMembresia(" . $datosResultado["MembresiaId"] . ");'>Eliminar</a>" . "</td>";

            echo "</tr>";
        }
    }
}


function VerDatosMembresiaCliente()
{

    $resultado = ObtenerMembresiasModel();
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {

            echo '<div class="col-md-3" style="margin-right: 6rem;">';
            echo '<ul class="price1">';
            echo '<h4>' . $datosResultado["Nombre"] . '</h4>';
            if ($datosResultado["Precio"] == 0) {
                echo '<h3>Gratis</h3>';
            } else {
                echo '<h3>' . $datosResultado["Precio"] . '</h3>';
            }
            echo '<ul class="price_list">';
            echo '<p>' . $datosResultado["Descripcion"] . '</p>';
            echo '<a class="popup-with-zoom-anim" href="#small-dialog">';
            echo '<li class="price_but">Matricular</li>';
            echo '</a>';
            echo '<div class="clear"></div>';
            echo '</ul>';
            echo '</ul>';
            echo '</div>';
            echo '<div id="small-dialog" class="mfp-hide">';
            echo '<div class="pop_up">';
            echo '<div class="payment-online-form-left">';
            echo '<form method="post" action="">';
            echo '<input type="hidden" id="membresiaId" name="membresiaId" value="' . $datosResultado["MembresiaId"] . '">';
            echo '<input type="hidden" id="precio" name="precio" value="' . $datosResultado["Precio"] . '">';
            echo '<h4><span class="shipping"> </span>Matrícular</h4>';
            echo '<ul class="payment-sendbtns">';
            echo '<li><input type="reset" value="Cerrar"></li>';
            echo '<li><input type="submit" value="Matrícular" id="btnMatricular" name="btnMatricular"></li>';
            echo '</ul>';
            echo '<div class="clear"> </div>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function verDatosMembresia($MembresiaId)
{
    $resultado = ObtenerMembresiaModel($MembresiaId);
    if ($resultado->num_rows > 0) {
        return mysqli_fetch_array($resultado);
    }
}

function verDatosMembresiaUsuario()
{
    $resultado = ObtenerUsuariosMembresiasModel($_SESSION["UsuarioId"]);
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $datosResultado["Nombre"] . "</td>";
            echo "<td>" . $datosResultado["FechaInicio"] . "</td>";
            echo "<td>" . $datosResultado["FechaExpiracion"] . "</td>";
            echo "</tr>";
        }
    }
}

if (isset($_POST["btnCrearMembresia"])) {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    $resultado = CrearMembresiasModel($nombre, $descripcion, $precio);

    if ($resultado == true) {
        header("location: ../Views/memberships_index_admin.php");
    } else {
        echo "Error al crear Membresía";
    }
}

if (isset($_POST["btnActualizarMembresia"])) {
    $membresiaId = $_POST["membresiaId"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];


    $resultado = EditarMembresiaModel($membresiaId, $nombre, $descripcion, $precio);

    if ($resultado == true) {
        header("location: ../Views/memberships_index_admin.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}

if (isset($_POST["btnMatricular"])) {
    $MembresiaId = $_POST["membresiaId"];
    $UsuarioId = $_SESSION["UsuarioId"];

    $date = new DateTime();
    $fechaInicio = $date->format('Y/m/d');
    $fechaExpiracion = date('Y/m/d', strtotime('+1 year'));

    $resultado = AgregarUsuarioMembresiaModel($UsuarioId, $MembresiaId, $fechaInicio, $fechaExpiracion);

    if ($resultado == true) {

        $mpdf = new \Mpdf\Mpdf();

        $html = '';
        $html .= '<h2>Detalles Factura</h2>';
        $html .= '<strong>Correo: </strong>' . $_SESSION["Correo"] . '<br/>';
        $html .= '<strong>Precio: </strong>' .  $_POST["precio"] . ".000" . '<br/>';
        $html .= '<strong>Fecha de Inicio de membresía: </strong>' . $fechaInicio . '<br/>';
        $html .= '<strong>Fecha de Expiración de membresía: </strong>' . $fechaExpiracion . '<br/>';

        $mpdf->WriteHTML($html);
        $nombreAdjunto = "../Files/factura.pdf";
        $mpdf->Output($nombreAdjunto);


        EnviarFactura(
            $_SESSION["Correo"],
            "Factura de membresía",
            "Buenas" . $_SESSION["NombreUsuario"] . ", aquí se adjunta la factura de la comprobación de la membresía $fechaInicio, por favor realice los pagos desde la caja del gimnasio",
            $nombreAdjunto
        );
        unlink($nombreAdjunto);

        header("location: ../Views/pricing.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}

function EnviarFactura($destinatario, $asunto, $cuerpo, $pdf)
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
    $mail->AddAddress($destinatario, 'Factura Membresía');

    if ($pdf != null) {
        $mail->AddAttachment($pdf);
    }

    $mail->send();
}



if (isset($_GET["eliminarMembresia"])) {
    $resultado = EliminarMembresiaModel($_GET["eliminarMembresia"]);

    if ($resultado) {
        echo "Eliminado";
    } else {
        echo "Error";
    }
}
