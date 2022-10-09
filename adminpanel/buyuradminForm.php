<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/eklediklerim.css">
<script src="js/eklediklerim.js"></script>
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Giriş</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="buyurAdmin.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Kullanıcı Adı</b></label>
      <input type="text" placeholder="Kullanıcı Adı girin" name="uname" required>

      <label for="psw"><b>Şifre</b></label>
      <input type="password" placeholder="Şifre girin" name="psw" required>
        
      <button type="submit">Giriş</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Şifremi Unuttum</a></span>
    </div>
  </form>
</div>

</body>
</html>
