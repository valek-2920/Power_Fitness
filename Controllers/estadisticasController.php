<?php
include '../Models/estadisticasModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function VerDatosEstadisticas()
{
    $resultado = ObtenerEstadisticasModel();
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            $usuario = $datosResultado["PrimerNombre"] .  ' ' . $datosResultado["PrimerApellido"] . ' ' . $datosResultado["SegundoApellido"];

            echo "<tr>";
            echo "<td>" . $usuario . "</td>";
            echo "<td>" . $datosResultado["Altura"] . ".cm" . "</td>";
            echo "<td>" . $datosResultado["Peso"] . ".lb" . "</td>";
            echo "<td>" . $datosResultado["Fecha"] . "</td>";
            echo "<td>" . "<a href='../Views/update_estadisticas_admin.php?q=" . $datosResultado["EstadisticasId"] . "'>Actualizar</a> | 
            <a href='#' onclick='EliminarEstadistica(" . $datosResultado["EstadisticasId"] . ");'>Eliminar</a>" . "</td>";
            echo "</tr>";
        }
    }
}
function VerDatosEstadisticasUsuarioCliente()
{
    $resultado = ObtenerEstadisticasUsuarioModel($_SESSION["UsuarioId"]);
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {

            echo "<tr>";
            echo "<td>" . $datosResultado["Altura"] . ".cm" . "</td>";
            echo "<td>" . $datosResultado["Peso"] . ".lb" . "</td>";
            echo "<td>" . $datosResultado["Fecha"] . "</td>";
            echo "</tr>";
        }
    }
}

function VerDatosEstadistica($EstadisticasId)
{
    $resultado = ObtenerEstadisticaModel($EstadisticasId);
    if ($resultado->num_rows > 0) {
        return mysqli_fetch_array($resultado);
    }
}

function listaUsuarios()
{
    $resultado = ListaUsuariosModel();
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            $usuario = $datosResultado["PrimerNombre"] .  ' ' . $datosResultado["PrimerApellido"] . ' ' . $datosResultado["SegundoApellido"];
            echo '<option value="' . $datosResultado["UsuarioId"] . '">' . $usuario . '</option>';
        }
    }
}

if (isset($_GET["eliminarEstadistica"])) {
    $resultado = EliminarEstadisticasModel($_GET["eliminarEstadistica"]);

    if ($resultado) {
        echo "Eliminado";
    } else {
        echo "Error";
    }
}

if (isset($_POST["btnCrearEstadisticas"])) {
    $Altura = $_POST["altura"];
    $Peso = $_POST["peso"];
    $Fecha = $_POST["fecha"];
    $usuarioId = $_POST["usuarioId"];

    $date = new DateTime($Fecha);
    $Fecha = $date->format('Y/m/d');

    $resultado = CrearEstadisticasModel($Altura, $Peso, $Fecha, $usuarioId);

    if ($resultado == true) {
        echo $resultado;
        header("location: ../Views/estadisticas_index_admin.php");
    } else {
        echo $resultado;
        echo "No se pudo crear las estadisticas";
    }
}

if (isset($_POST["btnActualizarEstadisticas"])) {
    $EstadisticasId = $_POST["EstadisticasId"];
    $Altura = $_POST["altura"];
    $Peso = $_POST["peso"];
    $Fecha = $_POST["fecha"];

    $date = new DateTime($Fecha);
    $Fecha = $date->format('Y/m/d');

    $resultado = EditarEstadisticasModel($EstadisticasId, $Altura, $Peso, $Fecha);

    if ($resultado == true) {
        header("location: ../Views/estadisticas_index_admin.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}
