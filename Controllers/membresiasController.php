<?php
include_once '../Models/membresiasModel.php';

function VerDatosMembresias()
{
    $resultado = ObtenerMembresiasModel();

    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $datosResultado["Nombre"] . "</td>";
            echo "<td>" . $datosResultado["Descripcion"] . "</td>";
            echo "<td>" . $datosResultado["Precio"] . "</td>";
            echo "<td>" . "<a href='../Views/membership_users.php?q=" . $datosResultado["MembresiaId"] . "'>Ver usuarios</a>" . "</td>";
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
            echo '<li class="price_but">Buy Now</li>';
            echo '</a>';
            echo '<div class="clear"></div>';
            echo '</ul>';
            echo '</ul>';
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

if (isset($_GET["eliminarMembresia"])) {
    $resultado = EliminarMembresiaModel($_GET["eliminarMembresia"]);

    if ($resultado) {
        echo "Eliminado";
    } else {
        echo "Error";
    }
}
