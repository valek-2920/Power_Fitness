<?php

function navClient(){
 echo '
 <div class="menu" id="menu">
 <div class="container">
    <div class="logo">
       <a href="index.php"><img src="../images/logo.png" alt=""/></a>
    </div>
    <div class="h_menu4"><!-- start h_menu4 -->
      <a class="toggleMenu" href="#">Menu</a>
        <ul class="nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="classes.php">Classes</a>
              
          </li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
         <script type="text/javascript" src="js/nav.js"></script>
     </div><!-- end h_menu4 -->
    <div class="clear"></div>
 </div>
</div>
 ';
}

function navAdmin(){
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
                  <li><a href="create_user.php"><i class="fa fa-users"></i> Usuarios</a></li>
              </ul>
          </div>
      </div>
  </div>
</div>
<div class="top_nav">
  <div class="nav_menu">
      <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <nav class="nav navbar-nav">
          <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      User name
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="javascript:;"> Perfil</a>
                      <a class="dropdown-item" href="javascript:;">
                          <span>Recuperar Contraseña</span>
                      </a>
                      <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
                  </div>
              </li>
          </ul>
      </nav>
  </div>
</div>
 </div>
  ';
 }

 function footer(){
  echo '
  <div class="footer-bottom">
  <div class="container">
   <div class="row section group">
   <div class="col-md-6">
     <div class="f-logo">
       <img src="../images/logo.png" alt=""/>
     </div>
     <p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
     <p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
     <p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info[at]mycompany.com</span></p>
   </div>
   <div class="col-md-6">
     <ul class="list">
       <h4 class="m_7">Menu</h4>
       <li><a href="#">About</a></li>
       <li><a href="#">Trainers</a></li>
       <li><a href="#">Classes</a></li>
       <li><a href="#">Pricing</a></li>
       <li><a href="#">Privacy</a></li>
       <li><a href="#">Contact</a></li>
     </ul>
     <ul class="list1">
       <h4 class="m_7">Community</h4>
       <li><a href="#">Blog</a></li>
       <li><a href="#">Forum</a></li>
       <li><a href="#">Support</a></li>
       <li><a href="#">Newsletter</a></li>
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

 function footerAdmin(){
  echo '
  <footer>
  <div class="pull-right">
      PowerFitness - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
  ';
 }