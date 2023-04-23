<?php
include('utilities.php');
include_once '../Controllers/usuariosController.php';

$resultado = VerDatosUsuario($_GET["q"]);
$DireccionDatos = explode(', ', $resultado["Direccion"]);

if ($resultado["Genero"] == "F") {
    $resultado["Genero"] = "Femenino";
} else {
    $resultado["Genero"] = "Masculino";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Power Fitness | Usuario</title>

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php
            navAdmin();
            ?>
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Actualizar Usuario</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_content">
                                    <br />
                                    <form action="" method="post" class="form-horizontal form-label-left">
                                        <input type="hidden" id="usuarioId" name="usuarioId" value="<?php echo $resultado["UsuarioId"] ?>">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Primer Nombre <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="primerNombre" name="primerNombre" required class="form-control" value="<?php echo $resultado["PrimerNombre"] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Primer Apellido <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="primerApellido" name="primerApellido" required class="form-control" value="<?php echo $resultado["PrimerApellido"] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Segundo Apellido <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="segundoApellido" name="segundoApellido" required class="form-control" value="<?php echo $resultado["SegundoApellido"] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Correo <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="email" id="correoElectronico" name="correoElectronico" readonly="True" required class="form-control" value="<?php echo $resultado["Correo"] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Contraseña <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" id="contrasenna" name="contrasenna" required type="password">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Genero <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select id="genero" name="genero" class="form-control" required>
                                                    <option value="<?php echo substr($resultado["Genero"], 0, 1) ?>" selected disabled hidden><?php echo $resultado["Genero"] ?></option>
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Fecha Nacimiento <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="date-picker form-control" value="<?php echo $resultado["FechaNacimiento"] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Celular <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="number" id="celular" name="celular" required class="form-control" value="<?php echo $resultado["Celular"] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Provincia <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select id="provincia" name="provincia" class="form-control" required>
                                                    <option value="<?php echo $DireccionDatos[0] ?>" selected disabled hidden><?php echo $DireccionDatos[0] ?></option>
                                                    <option value="San José">San José</option>
                                                    <option value="Alajuela">Alajuela</option>
                                                    <option value="Cartago">Cartago</option>
                                                    <option value="Heredia">Heredia</option>
                                                    <option value="Guanacaste">Guanacaste</option>
                                                    <option value="Puntarenas">Puntarenas</option>
                                                    <option value="Limón">Limón</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Ciudad <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="ciudad" name="ciudad" required class="form-control" value="<?php echo $DireccionDatos[1] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Dirección Exacta <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="direccionExacta" name="direccionExacta" required class="form-control" value="<?php echo $DireccionDatos[2] ?>">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <input class="btn btn-primary" type="submit" value="Actualizar Cuenta" id="btnActualizarUsuarioAdmin" name="btnActualizarUsuarioAdmin">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            footerAdmin();
            ?>
        </div>
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <script src="vendors/nprogress/nprogress.js"></script>
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendors/iCheck/icheck.min.js"></script>
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <script src="vendors/starrr/dist/starrr.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>