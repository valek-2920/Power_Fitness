<?php
include('utilities.php');
include_once '../Controllers/membresiasController.php';

$resultado = verDatosMembresia($_GET["q"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Power Fitness | Membresias</title>

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
                <div class="page-title">
                    <div class="title_left" style="padding-top:3rem;">
                        <h3>Actualizar Membresía</h3>
                    </div>
                </div>
                <div style="padding-top:5rem;">
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_content">
                                    <br />
                                    <form action="" method="post" class="form-horizontal form-label-left">
                                        <input type="hidden" id="membresiaId" name="membresiaId" value="<?php echo $resultado["MembresiaId"] ?>">

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nombre<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="nombre" name="nombre" required class="form-control" value="<?php echo $resultado["Nombre"] ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Descripcion<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <textarea rows="3" cols="20" id="descripcion" name="descripcion" required class="form-control"><?php echo $resultado["Descripcion"] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Precio</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="number" id="precio" name="precio" class="form-control" value="<?php echo $resultado["Precio"] ?>">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <input class="btn btn-primary" type="submit" value="Actualizar Membresía" id="btnActualizarMembresia" name="btnActualizarMembresia">
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