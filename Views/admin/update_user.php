<?php
include('../utilities.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Power Fitness | Usuarios</title>

    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="../css/custom.min.css" rel="stylesheet">
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
                                    <form data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Primer Nombre <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Primer Apellido <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Segundo Apellido <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Correo <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="email" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Genero</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="Masculino" class="join-btn"> &nbsp; Masculino &nbsp;
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="Femenino" class="join-btn"> Femenino
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Fecha Nacimiento <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                <script>
                                                    function timeFunctionLong(input) {
                                                        setTimeout(function() {
                                                            input.type = 'text';
                                                        }, 60000);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Celular <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Provincia <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select id="heard" class="form-control" required>
                                                    <option value="">***Seleccionar Provincia***</option>
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
                                                <input type="text" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Codigo Postal <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" class="form-control ">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Dirección Exacta <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button class="btn btn-danger" type="button">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Crear</button>
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

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <script src="../vendors/nprogress/nprogress.js"></script>
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <script src="../js/custom.min.js"></script>

</body>

</html>