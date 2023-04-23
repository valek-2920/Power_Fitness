<?php
include 'connection.php';

function CrearBlogModel($FechaCreacion, $Titulo, $Contenido,  $UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL CrearBlog('$FechaCreacion','$Titulo','$Contenido','$UsuarioId');";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}


function ObtenerBlogsModel()
{
    $instancia = Open();

    $sentencia = "CALL 	ObtenerBlogs();";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function ObtenerBlogModel($BlogId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerBlog($BlogId);";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}
function ObtenerBlogPorUsuarioModel($UsuarioId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerBlogPorUsuario($UsuarioId);";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function EditarBlogModel($BlogId, $Titulo, $Contenido)
{
    $instancia = Open();

    $sentencia = "CALL EditarBlog($BlogId,'$Titulo','$Contenido');";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}

function EliminarBlogModel($BlogId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarBlog($BlogId);";
    $resultado = $instancia->query($sentencia);

    Close($instancia);
    return $resultado;
}
