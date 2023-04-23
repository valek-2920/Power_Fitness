<?php
include_once '../Models/blogModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function VerDatosBlogs()
{
    $resultado = ObtenerBlogPorUsuarioModel($_SESSION["UsuarioId"]);
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {

            echo "<tr>";
            echo "<td>" . $datosResultado["Titulo"] . "</td>";
            echo "<td>" . $datosResultado["Contenido"] . "</td>";
            echo "<td>" . $datosResultado["FechaCreacion"] . "</td>";
            echo "<td>" . "<a href='../Views/update_blog.php?q=" . $datosResultado["BlogId"] . "'>Actualizar</a> | 
            <a href='#' onclick='EliminarBlog(" . $datosResultado["BlogId"] . ");'>Eliminar</a>" . "</td>";

            echo "</tr>";
        }
    }
}

function VerDatosBlogsCliente()
{
    $resultado = ObtenerBlogsModel();
    if ($resultado->num_rows > 0) {
        while ($datosResultado = mysqli_fetch_array($resultado)) {
            $administrador = $datosResultado["PrimerNombre"] .  ' ' . $datosResultado["PrimerApellido"] . ' ' . $datosResultado["SegundoApellido"];

            echo '<div class="blog_box">';
            echo '<div class="blog_grid">';
            echo '<h3><a href="blog_single.php">' . $datosResultado["Titulo"] . '</a></h3><i class="document3"> </i>';
            echo '<div class="singe_desc">';
            echo '<p>' . $datosResultado["Contenido"] . '</p>';
            echo '<div class="comments">';
            echo '<ul class="links">';
            echo '<li><a href="#"><i class="blog_icon1"> </i><br><span>' . $datosResultado["FechaCreacion"] . '</span></a></li>';
            echo '<li><a href="#"><i class="blog_icon2"> </i><br><span>' . $administrador . '</span></a></li>';
            echo '</ul>';
            echo '</div>';
            echo '<div class="clear"></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function verDatosBlog($BlogId)
{
    $resultado = ObtenerBlogModel($BlogId);
    if ($resultado->num_rows > 0) {
        return mysqli_fetch_array($resultado);
    }
}

if (isset($_POST["btnActualizarBlog"])) {
    $blogId = $_POST["blogId"];
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];


    $resultado = EditarBlogModel($blogId, $titulo, $contenido);

    if ($resultado == true) {
        header("location: ../Views/blog_index_admin.php");
    } else {
        echo "No se pudo actualizar la información";
    }
}


if (isset($_POST["btnCrearBlog"])) {
    $date = new DateTime();
    $fechaCreacion = $date->format('Y/m/d');
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $usuarioId = $_SESSION["UsuarioId"];

    $resultado = CrearBlogModel($fechaCreacion, $titulo, $contenido, $usuarioId);

    if ($resultado == true) {
        header("location: ../Views/blog_index_admin.php");
    } else {
        echo "Error al crear blog";
    }
}

if (isset($_GET["eliminarBlog"])) {
    $resultado = EliminarBlogModel($_GET["eliminarBlog"]);

    if ($resultado) {
        echo "Eliminado";
    } else {
        echo "Error";
    }
}
