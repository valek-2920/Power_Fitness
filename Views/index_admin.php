<?php
include('utilities.php');
include '../Controllers/usuariosController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PowerFitness | Administracion</title>

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php
            navAdmin();
            ?>
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                    <div class="show_username">
                        <?php
                        MostrarNombreUsuario();
                        ?>
                    </div>
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    Opciones Usuario
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"> Perfil</a>
                                    <a class="dropdown-item" href="#">Recuperar Contraseña</a>
                                    <a class="dropdown-item" href="../Controllers/CerrarSesionController.php">
                                        <span>Cerrar Sesión</span></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>



        <div class="right_col" role="main">
            <br />
            <div class="col-md-6 col-sm-6">
                <h1>Usuarios del Sistema</h1>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="pull-right">
                    <a href="create_user_admin.php"><i class="fa fa-plus"></i> Crear</a>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                <form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Correo Electrónico</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Tipo Usuario</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    VerDatosUsuarios();
                                    ?>
                                </tbody>
                            </table>

                        </form>
                                </div>
                            </div>
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
    <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="vendors/raphael/raphael.min.js"></script>
    <script src="vendors/morris.js/morris.min.js"></script>
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/funciones/funcionesUsuario.js"></script>

</body>

</html>