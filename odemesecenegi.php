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
    <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      <?php include("Connections/baglan.php"); echo $_SESSION['musteriad']; $id = $_SESSION["musteriid"];
	$sor = mysql_query("SELECT * FROM musteri where id='$id'")or die(mysql_error());
	while($yaz=mysql_fetch_array($sor))
	{
	?>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="profil.php?id=<?php echo $yaz["id"]; ?>">??yelik Bilgilerim</a>
      <a class="dropdown-item" href="sepetim.php?id=<?php echo $yaz["id"]; ?>">Sepetim</a>
      <a class="dropdown-item" href="siparislerim.php?id=<?php echo $yaz["id"]; ?>">Sipari??lerim</a>
      <a class="dropdown-item" href="cikis.php">????k????</a>
    </div>
  </div>
  <?php 
	}?>    
	<!-- InstanceEndEditable -->
    </div>
    </div><!-- row-->
    </div><!--container-->
<!-- InstanceBeginEditable name="urunler" --><nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <a class="navbar-brand" href="urunler.php">Anasayfa</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> 
    <span class="navbar-toggler-icon"></span> 
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <!--<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="urunler.php" id="navbardrop" data-toggle="dropdown">
        ??r??nler
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">D???? Giyim</a>
        <a class="dropdown-item" href="#">Bluz</a>
        <a class="dropdown-item" href="#">Etek</a>
      </div>
      </li>-->
      <li class="nav-item"><a class="nav-link" href="urunler.php">??r??nler</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Hakk??m??zda</a></li>
      <li class="nav-item"><a class="nav-link" href="iletisim.php">??leti??im</a></li>    
    </ul>
  </div><!-- collapse-->
</nav><!-- InstanceEndEditable -->
<div class="container">
<div class="row">
 <!-- InstanceBeginEditable name="head" -->
 <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4 col-xl-4"></div>
 <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4 col-xl-4"><br>
  	<form action="odemesecenegionayla.php?id=<?php echo $id; ?>" method="get">
  <table align="center">
      <tr>
      	<td width="236" align="center"><h4><b>??deme Se??ene??i</b></h4></td>
      </tr>
      <?php
	$sor = mysql_query("SELECT * FROM odemetipi")or die(mysql_error());
	while($yaz=mysql_fetch_array($sor))
	{
	?>
    <tr>
        <td>
    <label>
          <input type="radio" name="odemetipi" class="form-check-input" value="<?php echo $yaz['id']; ?>" id="<?php echo $yaz['id'];?>">
          <?php echo $yaz['tip']; ?></label></td>
      </tr><?php } ?>
      <tr>
      <td align="left">
      <b>Havale i??in: </b>Resul Kut<br>
		    Ziraat Bankas??<br>
IBAN:TR16
      </td>
      </tr>
      <tr>
	  <td align="left">
      <br><b><input type="checkbox" size="100" name="mesafelisozlesme" >Mesafeli Sat???? S??zle??mesi</b></td>		
      </tr>
      <tr>
	  <td align="center"><button name="onayla" type="submit" class="btn btn-dark" id="submit">Onayla</button></td>		
      </tr>
  </table>
</form>

</div>
<div class="col-xl-4 col-md-4 col-sm-4 col-lg-4 col-xl-4"></div>
  <!-- InstanceEndEditable -->
</div><!--row-->
</div><!--container-->
<br>
<div class="container p-3 my-3 bg-dark text-white">
<div class="row bg-dark ">
 <br> 
 <div class="col-md-4 col-lg-4 col-sm-4">
 <p><h5><b>karefashion.com</b></h5></p><br>
    <a class="text-white" href="#">??ade, iptal ve de??i??im</a><br>
 <a class="text-white" href="#">??deme se??enekleri</a><br>
 <a class="text-white" href="#">Teslimat ve Kargo</a>
 </div>
 <br><br>
 <div class="col-md-4 col-lg-4 col-sm-4">
 <p class="text-body"><h5><b>B??Z?? TANIYIN</b></h5></p>
 <br>
 <a class="text-white" href="#">Hakk??m??zda</a><br>
 <a class="text-white" href="#">??leti??im</a><br>
 <a class="text-white" href="#">S??k Sorulan Sorular</a>
 </div>
 <br><br>
 <div class="col-md-4 col-lg-4 col-sm-4">
 <p class="text-body"><h5><b>B??ZE ULA??IN</b></h5></p>
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
  <div class="col-md-4 col-lg-4 col-sm-4 text-black" align="right">Ay??egul Yaz??l??m | 2021</div>
  <div class="col-md-4 col-lg-4 col-sm-4"></div>
</div><!--row-->
</div><!--container-->

</body>
<!-- InstanceEnd --></html>