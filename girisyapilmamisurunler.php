<!DOCTYPE html>
<html lang="tr"><!-- InstanceBegin template="/Templates/sablon.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="utf-8">
	
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="/cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminpanel/css/eklediklerim.css">
<script src="adminpanel/js/eklediklerm.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="adminpanel/css/lightbox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
  <?php session_start();?>
<!-- InstanceBeginEditable name="doctitle" -->
  <title>Kare Fashion || Anasayfa</title>
  <!-- InstanceEndEditable -->
</head>
<body>
	<div class="container">
	<div class="row">
    <div class="col-md-4 col-lg-4 col-sm-4" align="left">
    <a href="https://www.instagram.com/resul.kut" target="_blank">
    <img src="icons/w.png" width="25" height="25" /> </a>
    <a href="https://www.instagram.com/resul.kut" target="_blank">
    <img src="icons/i.png" width="25" height="25" /> </a>
    <a href="https://www.instagram.com/resul.kut" target="_blank">
    <img src="icons/t.png" width="25" height="25" /> </a>
    <a href="https://www.instagram.com/resul.kut" target="_blank">
    <img src="icons/f.png" width="25" height="25" /> </a>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4"bg-image="banner.jpg" bg-repeat="repeat-y" align="center"><img src="banner.jpg" height="160" weight="160"></img>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4"><!-- InstanceBeginEditable name="session" -->
  <a href="giris.php">
    <button class="btn btn-dark" type="button" name="giris" style="width:auto;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>Giriş</button></a>
  <a href="uyeolform.php"><button type="button" name="uyeol" style="width:auto;" class="btn btn-dark">Üye Ol</button></a> 
	<!-- InstanceEndEditable -->
    </div>
    </div><!-- row-->
    </div><!--container-->
<!-- InstanceBeginEditable name="urunler" -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <a class="navbar-brand" href="girisyapilmamisurunler.php">Anasayfa</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> 
    <span class="navbar-toggler-icon"></span> 
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <!--<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="urunler.php" id="navbardrop" data-toggle="dropdown">
        Ürünler
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Dış Giyim</a>
        <a class="dropdown-item" href="#">Bluz</a>
        <a class="dropdown-item" href="#">Etek</a>
      </div>
      </li>-->
      <li class="nav-item"><a class="nav-link" href="girisyapilmamisurunler.php">Ürünler</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Hakkımızda</a></li>
      <li class="nav-item"><a class="nav-link" href="girisyapilmamisiletisim.php">İletişim</a></li>    
    </ul>
  </div><!-- collapse-->
</nav>
<!-- InstanceEndEditable -->
<div class="container">
<div class="row">
 <!-- InstanceBeginEditable name="head" --><div class="row">
 	<div class="col-lg-2"></div>
    <div class="col-lg-8">       
    	<table width="70" border="0" cellpadding="20" >        
          <?php
			include("Connections/baglan.php"); 
			$sor = mysql_query("SELECT * FROM urun ORDER BY urun_id ASC")or die(mysql_error());
			$i=0;
			echo "<tr>";
			while ($yaz = mysql_fetch_array($sor) ) {
			echo "<td>";?>           
            <div class="card">   
            <a href='girisyapilmamis.php'><img src="adminpanel/<?php echo $yaz["urun_foto1"]; ?>" style="width:200px" class="hover-shadow cursor"></a></div>            
            <br><h6 class="card-title" align="center"><?php echo $yaz["urun_ad"]; ?></h6>
             <p class="card-text" align="right"><?php echo $yaz["urun_fiyat"]; echo " ₺";?></p>
            
			 <?php ++$i;if($i%4==0){
				 echo "</tr>";echo " </td>";
				 }elseif ($i%4==1 || $i%4==2 || $i%4==3){
					 echo "</td>";
					 }
				 } 
          ?>     
     	</table>
  	</div><!--col lg 8-->
  	<div class="col-lg-2"></div>
</div><!--row-->
  <!-- InstanceEndEditable -->
</div><!--row-->
</div><!--container-->
<br>
<div class="container p-3 my-3 bg-dark text-white">
<div class="row bg-dark ">
 <br> 
 <div class="col-md-4 col-lg-4 col-sm-4">
 <p><h5><b>karefashion.com</b></h5></p><br>
    <a class="text-white" href="#">İade, iptal ve değişim</a><br>
 <a class="text-white" href="#">Ödeme seçenekleri</a><br>
 <a class="text-white" href="#">Teslimat ve Kargo</a>
 </div>
 <br><br>
 <div class="col-md-4 col-lg-4 col-sm-4">
 <p class="text-body"><h5><b>BİZİ TANIYIN</b></h5></p>
 <br>
 <a class="text-white" href="#">Hakkımızda</a><br>
 <a class="text-white" href="#">İletişim</a><br>
 <a class="text-white" href="#">Sık Sorulan Sorular</a>
 </div>
 <br><br>
 <div class="col-md-4 col-lg-4 col-sm-4">
 <p class="text-body"><h5><b>BİZE ULAŞIN</b></h5></p>
 <br><a class="text-white" href="https://www.instagram.com/resul.kut" target="_blank">
    <img src="icons/w1.png" width="25" height="25" /> 05339452353 </a><br><br>
    <a class="text-white" href="https://www.instagram.com/resul.kut" target="_blank">
    <img src="icons/i1.png" width="25" height="25" /> resul.kut </a><br><br>
    <a class="text-white" href="https://www.instagram.com/resul.kut" target="_blank">
    <img src="icons/f1.png" width="25" height="25" /> resul.kut </a><br><br>
 </div>
<div class="col-md-4 col-lg-4 col-sm-4"></div>
</div><!--row-->
</div><!--container-->
<div class="container">
<div class="row">
  <div class="col-md-4 col-lg-4 col-sm-4"></div>
  <div class="col-md-4 col-lg-4 col-sm-4 text-black" align="right">Ayşegul Yazılım | 2021</div>
  <div class="col-md-4 col-lg-4 col-sm-4"></div>
</div><!--row-->
</div><!--container-->

</body>
<!-- InstanceEnd --></html>