<table width="70" border="0" cellpadding="20" >        
          <?php
			include("Connections/baglan.php"); 
			$sor = mysql_query("SELECT * FROM urun ORDER BY urun_id ASC")or die(mysql_error());
			$i=0;
			echo "<tr>";
			while ($yaz = mysql_fetch_array($sor) ) {
			echo "<td>";?>           
            
            <div class="card " style="width:200px">
  			<a href='urundetay.php?id=<?php echo $yaz["urun_id"]; ?>'><img class="card-img-top" src="adminpanel/<?php echo $yaz["urun_foto1"]; ?>" alt="Card image" style="width:200px" class="hover-shadow cursor"></a>
    		<h7 class="card-title" align="left"><b><?php echo $yaz["urun_ad"]; ?></b></h7>
    		<p class="card-text" align="right"><?php echo $yaz["urun_fiyat"]; echo " ₺";?></p>
    		</div><!--card -->
            <?php ++$i;if($i%4==0){
				 echo "</td>";echo " </tr>";
				 }elseif ($i%4==1 || $i%4==2 || $i%4==3){
					 echo "</td>";
					 }
				 } 
          ?>     
     	</table>