<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include('utilities.php');
include '../Controllers/usuariosController.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Power Fitness | Recuperar Contraseña</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
</head>

<body>

    <?php
    navLogin();
    ?>
    <div class="main">
        <div class="register-grids" style="padding-bottom:23rem;">
            <div class="container">
                <form action="" method="post">
                    <div class="register-top-grid" >
                        <h2>Por favor digite su correo electrónico para obtener un correo de recuperación de contraseña</h2>
                        <div>
                            <p>Correo Electrónico<label>*</label></p>
                            <input type="email" id="correoElectronico" name="correoElectronico" required onkeyup="HabilitarBoton();">
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                    <input type="submit" value="Recuperar Cuenta" id="btnRecuperarCuenta" name="btnRecuperarCuenta" disabled>
                </form>
            </div>
        </div>
    </div>
    <?php
    footerLogin();
    ?>
    <script src="js/funciones/funcionesRecuperarUsuario.js"></script>
</body>

</html>