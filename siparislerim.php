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
      <a class="dropdown-item" href="profil.php?id=<?php echo $yaz["id"]; ?>">Üyelik Bilgilerim</a>
      <a class="dropdown-item" href="sepetim.php?id=<?php echo $yaz["id"]; ?>">Sepetim</a>
      <a class="dropdown-item" href="siparislerim.php?id=<?php echo $yaz["id"]; ?>">Siparişlerim</a>
      <a class="dropdown-item" href="cikis.php">Çıkış</a>
    </div>
  </div>
  <?php 
	}?><!-- InstanceEndEditable -->
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
        Ürünler
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Dış Giyim</a>
        <a class="dropdown-item" href="#">Bluz</a>
        <a class="dropdown-item" href="#">Etek</a>
      </div>
      </li>-->
      <li class="nav-item"><a class="nav-link" href="urunler.php">Ürünler</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Hakkımızda</a></li>
      <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>    
    </ul>
  </div><!-- collapse-->
</nav><!-- InstanceEndEditable -->
<div class="container">
<div class="row">
 <!-- InstanceBeginEditable name="head" -->
 <div class="col-xl-2 col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>
 <div class="col-xl-8 col-md-8 col-sm-8 col-lg-8 col-xl-8"><br>
 <table width="578">
 
 <tr>
 <td><b>Sipariş No</b></td>
 <td><b>Tarih - Saat  </b></td>
 <td><b>Ödeme Tipi  </b> </td>
 <td><b>Tutar</b>  </td>
 <td><b>Durum </b></td>
 <td></td>
 </tr>
 <?php include("Connections/baglan.php");
 $musteriid=$_GET['id'];
 $sorguu=mysql_query("SELECT siparis.id, siparis.tarih_saat, odemetipi.tip, siparis.tutar, siparisdurum.durum FROM siparis INNER JOIN siparisdurum ON siparis.durum_id=siparisdurum.id INNER JOIN odemetipi ON siparis.odemetipi_id=odemetipi.id where siparis.musteri_id=$musteriid");
 
 while($yazz=mysql_fetch_array($sorguu))
	{?>
    <form action="siparissil.php?id=<?php echo $yazz["id"]; ?>" method="post" name="siparissil">
    <tr>
  	<td><?php echo $yazz['id']; ?></td>
    <td><?php echo $yazz['tarih_saat'] ?></td>
    <td><?php echo $yazz['tip'] ?></td>
    <td><?php echo $yazz['tutar']." ₺"  ?></td>
    <td><?php echo $yazz['durum']  ?></td>
    <td><button name="submit" type="submit" class="btn btn-dark" id="submit">İptal Et</button></td>
  </tr>
   </form>
 <?php 
	}?>
 </table>
 </div>
 <div class="col-xl-2 col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>
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