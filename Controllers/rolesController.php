<?php
include_once '../Models/rolModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function VerDatosRoles()
{
    $resultado = ObtenerRolesModel();
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {

            echo "<tr>";
            echo "<td>" . $datosResultado["RolId"] . "</td>";
            echo "<td>" . $datosResultado["Nombre"] . "</td>";
            echo "<td>" . $datosResultado["Descripcion"] . "</td>";
            echo "<td>" . "<a href='../Views/update_role_admin.php?q=" . $datosResultado["RolId"] . "'>Actualizar</a> | 
            <a href='#' onclick='EliminarRol(" . $datosResultado["RolId"] . ");'>Eliminar</a>" . "</td>";
            echo "</tr>";
        }
    }
}

function VerDatosRol($RolId)
{
    $resultado = ObtenerRolModel($RolId);
    if ($resultado->num_rows > 0) {
        return mysqli_fetch_array($resultado);
    }
}

if (isset($_GET["eliminarRol"])) {
    $resultado = EliminarRolModel($_GET["eliminarRol"]);

    if ($resultado) {
        echo "Eliminado";
    } else {
        echo "Error";
    }
}

if (isset($_POST["btnCrearRol"])) {
    $Nombre = $_POST["nombre"];
    $Descripcion = $_POST["descripcion"];

    $resultado = CrearRolModel($Nombre, $Descripcion);

    if ($resultado == true) {
        echo $resultado;
        header("location: ../Views/roles_index_admin.php");
    } else {
        echo $resultado;
        echo "No se pudo crear el rol";
    }
}

if (isset($_POST["btnActualizarRol"])) {
    $RolId = $_POST["RolId"];
    $Nombre = $_POST["Nombre"];
    $Descripcion = $_POST["Descripcion"];

    $resultado = EditarRolModel($RolId, $Nombre, $Descripcion);

    if ($resultado == true) {
        header("location: ../Views/roles_index_admin.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}
