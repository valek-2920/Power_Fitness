<?php
include 'connection.php';

function CrearMembresiasModel($Nombre, $Descripccion,$Precio)
{
    $instancia = Open();

    $sentencia = "CALL CrearMembresia('$Nombre', '$Descripccion', $Precio);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ObtenerMembresiasModel()
{
    $instancia = Open();

    $sentencia = "CALL ObtenerMembresias();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


function ObtenerMembresiaModel($MembresiaId)
{
    $instancia = Open();

    $sentencia = "CALL ObtenerMembresia('$MembresiaId');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EditarMembresiaModel($MembresiaId,$Nombre, $Descripccion ,$Precio)
{
    $instancia = Open();

    $sentencia = "CALL EditarMembresia($MembresiaId, '$Nombre', '$Descripccion', $Precio);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function EliminarMembresiaModel($MembresiaId)
{
    $instancia = Open();

    $sentencia = "CALL EliminarMembresia('$MembresiaId');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function ConfirmarPagoModel()
{
    $instancia = Open();

    $IdUsuario = $_SESSION["ConsecutivoUsuario"];
    $sentencia = "CALL ConfirmarPago($IdUsuario);";
    $instancia -> query($sentencia);

    Close($instancia);
}

function VerFacturasRealizadasModel()
{
    $instancia = Open();

    $IdUsuario = $_SESSION["ConsecutivoUsuario"];
    $sentencia = "CALL VerFacturasRealizadas($IdUsuario);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function VerDetalleFacturaModel($IdCompra)
{
    $instancia = Open();

    $sentencia = "CALL VerDetalleFactura($IdCompra);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}
