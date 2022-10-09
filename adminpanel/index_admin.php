<?php session_start();?><!DOCTYPE html>
<html lang="tr"><!-- InstanceBegin template="/Templates/adminsablon.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
    
<!-- InstanceBeginEditable name="baslik" --><title>Kare Fashion || Anasayfa </title>
<link rel="shortcut icon" href="css/banner.ico" type="image/x-icon" ><!-- InstanceEndEditable -->
    <!-- Bootstrap -->
   <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
     <!-- Font Awesome --> 
   <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css"  href="css/nprogress.css">
   <link rel="stylesheet" type="text/css"  href="css/green.css">
   <link rel="stylesheet" type="text/css"  href="css/bootstrap-progressbar-3.3.4.min.css">
   <link rel="stylesheet" type="text/css"  href="css/jqvmap.min.css">
   <link rel="stylesheet" type="text/css"  href="css/daterangepicker.css">
   <link rel="stylesheet" type="text/css"  href="css/custom.min.css">
  </head>
  <body class="nav-md">
  <script src="js/eklediklerim.js"></script>
      <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index_admin.php" class="site_title"><!-- InstanceBeginEditable name="5" --><image src="../banner.jpg" width="45px" height="45px"></image><!-- InstanceEndEditable --></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
             <div class="profile_info">
             <span>Hoşgeldiniz , </span>
             </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Ana Menü</h3>
                <ul class="nav side-menu">
                  <li><a href="index_admin.php"><i class="fa fa-home"></i> Anasayfa</a>
                   <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>-->
                  </li>
                  <li><a><i class="fa fa-edit"></i> Ürün İşlemleri <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="urunekleform.php">Ürün Ekle</a></li>
                      <li><a href="urungoruntule.php">Ürün Görüntüle | Sil</a></li>
                  </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Siparişler <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="bekleyensiparisler.php">Bekleyen Siparişler</a></li>
                      <li><a href="onaylisiparisler.php">Onaylanan Siparişler</a></li>
                  </ul>
                  </li>
              <br><br>
                </ul>
              </div><!--menu section-->
              <div class="menu_section">
                <h3>Kişisel Bilgiler</h3>
                <ul class="nav side-menu">
                  <li><a href="bilgilerimiguncelleform.php"><i class="fa fa-bug"></i> Bilgilerimi Güncelle </a>
                    <ul class="nav child_menu">
                    </ul>
                  </li>               
                </ul>
              </div><!--menu section-->
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><!-- InstanceBeginEditable name="session" --><?php 
				  include("../Connections/baglan.php");
echo $_SESSION['kullaniciAdi'];?><!-- InstanceEndEditable -->
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="bilgilerimiguncelleform.php"> Profil</a></li>
                    <li><a href="cikis.php"> Çıkış</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
          </div>
          <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-1"></div>
                  <div class="col-md-9 col-sm-9 col-xs-9"><!-- InstanceBeginEditable name="ortaaa" -->Admin Paneli<!-- InstanceEndEditable -->
                     </div>
                 <div class="col-md-1 col-sm-1 col-xs-1"></div>
                </div><!--row--!
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Ayşegül ||Yazılım
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    
    <!-- jQuery -->
	<script type = 'text/javascript' src = "js/jquery.min.js"></script>
    <!-- Bootstrap -->
	<script type = 'text/javascript' src = "js/bootstrap.min.js"></script>
    <!-- FastClick -->
	<script type = 'text/javascript' src = "js/fastclick.js"></script>
    <!-- NProgress -->
	<script type = 'text/javascript' src = "js/nprogress.js"></script>
    <!-- Chart.js -->
	<script type = 'text/javascript' src = "js/Chart.min.js"></script>
    <!-- gauge.js -->
	<script type = 'text/javascript' src = "js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script type = 'text/javascript' src = "js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
	<script type = 'text/javascript' src = "js/icheck.min.js"></script>
    <!-- Skycons -->
	<script type = 'text/javascript' src = "js/skycons.js"></script>
    <!-- Flot -->
	<script type = 'text/javascript' src = "js/jquery.flot.js"></script>
	<script type = 'text/javascript' src = "js/jquery.flot.pie.js"></script>
	<script type = 'text/javascript' src = "js/jquery.flot.time.js"></script>
	<script type = 'text/javascript' src = "js/jquery.flot.stack.js"></script>
	<script type = 'text/javascript' src = "js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script type = 'text/javascript' src = "js/jquery.flot.orderBars.js"></script>
	<script type = 'text/javascript' src = "js/jquery.flot.spline.min.js"></script>
	<script type = 'text/javascript' src = "js/curvedLines.js"></script>
    <!-- DateJS -->
	<script type = 'text/javascript' src = "js/date.js"></script>
    <!-- JQVMap -->
	<script type = 'text/javascript' src = "js/jquery.vmap.js"></script>
	<script type = 'text/javascript' src = "js/jquery.vmap.world.js"></script>   
	<script type = 'text/javascript' src = "js/jquery.vmap.sampledata.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script type = 'text/javascript' src = "js/moment.min.js"></script>
	<script type = 'text/javascript' src = "js/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
	<script type = 'text/javascript' src = "js/custom.min.js"></script>
</body>
<!-- InstanceEnd --></html>
