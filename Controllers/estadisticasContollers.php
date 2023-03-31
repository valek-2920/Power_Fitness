<?php
include_once '../Models/estadisticasModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function VerDatosEstadisticas()
{
    $resultado = ObtenerEstadisticasModel();
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {

            echo "<tr>";
            echo "<td>" . $datosResultado["EstadisticasId"] . "</td>";
            echo "<td>" . $datosResultado["Altura"] . "</td>";
            echo "<td>" . $datosResultado["Peso"] . "</td>";
            echo "<td>" . $datosResultado["Fecha"] . "</td>";
            echo "<td>" . "<a href='../Views/.php?q=" . $datosResultado["EstadisticasId"] . "'>Actualizar</a> | 
            <a href='#' onclick='eliminarEstadisticas(" . $datosResultado["EstadisticasId"] . ");'>Eliminar</a>" . "</td>";
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

if (isset($_GET["eliminarEstadisticas"])) {
    $resultado = EliminarEstadisticasModel($_GET["EliminarEstadisticas"]);

    if ($resultado) {
        echo "Estadisticas Eliminadas";
    } else {
        echo "Error";
    }
}

if (isset($_POST["btnCrearEstadisticas"])) {
    $Altura = $_POST["altura"];
    $Peso = $_POST["peso"];
    $Fecha = $_POST["fecha"];

    $resultado = CrearEstadisticasModel($Altura, $Peso, $Fecha);

    if ($resultado == true) {
        echo $resultado;
        header("location: ../Views/.php");
    } else {
        echo $resultado;
        echo "No se pudo crear las estadisticas";
    }
}

if (isset($_POST["btnActualizarEstadisticas"])) {
    $Altura = $_POST["altura"];
    $Peso = $_POST["peso"];
    $Fecha = $_POST["fecha"];

    $resultado = EditarEstadisticasModel($Altura, $Peso, $Fecha);

    if ($resultado == true) {
        header("location: ../Views/.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}