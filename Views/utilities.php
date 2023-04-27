<?php

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

function MostrarNombreUsuario()
{
    if($_SESSION["Correo"] != null)
    {
        echo $_SESSION["Correo"] . ' / ' . $_SESSION["Nombre"];;
    }
    else
    {
        header("location: login.php");
    }
}

function navClient()
{
    echo '
    <div class="menu" id="menu">
    <div class="container">
       <div class="logo">
          <a href="index.php"><img src="/images/logo.png" alt=""/></a>
       </div>
       <div class="h_menu4"><!-- start h_menu4 -->
         <a class="toggleMenu" href="#">Menu</a>
           <ul class="nav">
             <li class="active"><a href="index.php">Home</a></li>
             <li><a href="about.php">Acerca</a></li>
             <li><a href="classes.php">Clases</a></li>
             <li><a href="blog.php">Blog</a></li>
             <li><a href="pricing.php">Precio</a></li>
             <li><a href="contact.php">Contacto</a></li> 
             <li><a href="profile.php">Cuenta</a></li>
             <li><a href="../Controllers/CerrarSesionController.php">Cerrar Sesión</a></li>
         </ul>
            <script type="text/javascript" src="js/nav.js"></script>
        </div><!-- end h_menu4 -->
       <div class="clear"></div>
       <div class="top_nav">
    </div>
   </div>
    ';
}

function navLogin(){
  echo '
  <div class="menu" id="menu">
  <div class="container">
     <div class="logo">
        <a href="index.php"><img src="/images/logo.png" alt=""/></a>
     </div>
     <div class="h_menu4"><!-- start h_menu4 -->
       <a class="toggleMenu" href="#">Menu</a>
         <ul class="nav">

       </ul>
          <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
     <div class="clear"></div>
     <div class="top_nav">
  </div>
 </div>
  ';
}

function navAdmin()
{
  echo '
  <div class="col-md-3 left_col">
  <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
          <a href="index.php" class="site_title"><span>Power Fitness Administration</span></a>
      </div>

      <div class="clearfix"></div>
      <br />

      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
              <ul class="nav side-menu">
                  <li><a href="index_admin.php"><i class="fa fa-users"></i>Usuarios</a></li>
                  <li><a href="roles_index_admin.php"><i class="fa fa-tag"></i>Roles</a></li>
                  <li><a href="blog_index_admin.php"><i class="fa fa-book"></i>Blog</a></li>
                  <li><a href="memberships_index_admin.php"><i class="fa fa-circle"></i>Membresías</a></li>
              </ul>
          </div>
      </div>
  </div>
</div>
  ';
}

function footer()
{
  echo '
  <div class="footer-bottom">
  <div class="container">
   <div class="row section group">
   <div class="col-md-6">
     <div class="f-logo">
       <img src="/images/logo.png" alt=""/>
     </div>
     <p class="m_9">Ubicado en San Miguel, Santo Domingo, Heredia, Costa Rica</p>
     <p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(506) 8888 8888</span></p>
     <p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info@powerfitness.com</span></p>
   </div>
   <div class="col-md-4">
     <ul class="list">
       <h4 class="m_7">Menu</h4>
       <li><a href="about.php">Acerca</a></li>
       <li><a href="classes.php"">Clases</a></li>
       <li><a href="pricing.php">Precios</a></li>
       <li><a href="blog.php">Blog</a></li>
       <li><a href="contact.php">Contacto</a></li>
     </ul>
   </div>
   <div class="clear"></div>
     </div>
  </div>
</div>
<div class="copyright">
 <div class="container">
   <div class="copy">
       <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
   </div>
  <div class="clear"></div>
 </div>
  </div>
  ';
}
function footerLogin()
{
  echo '
  <div class="footer-bottom">
	<div class="copyright">
		<div class="container">
			<div class="copy">
				<p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
  ';
}

function footerAdmin()
{
  echo '
  <footer>
  <div class="pull-right">
      PowerFitness - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
  ';
}

function loginSpan()
{
  echo '
  <div class="login">
  <div class="row login_details">
    <div class="col-md-6">
      <div class="join">
        <h3>Porque unirte?</h3>
        <h4>sed diam nonummy nibh euismod</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nibh euismod tincidunt ut laoreet dolore magna . </p>
        <div class="btn3">
          <a href="#">Join Today</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="join-right">
        <h3>Posees ya una cuenta?</h3>
        <h4>sed diam nonummy nibh euismod</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nibh euismod tincidunt ut laoreet dolore magna . </p>
        <div class="buttons_login">
          <div class="btn4" >
            <a href="login.php">Iniciar sesión</a>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
  ';
}
