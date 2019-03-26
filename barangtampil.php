<?php

$tampil=mysqli_query($connect,"SELECT * FROM barang b,kategori_barang k where k.id_kategoripw08=b.id_kategoripw08 and id_barangpw08=$_GET[id]");

while ($r=mysqli_fetch_array($tampil)){
  mysqli_query($connect,"UPDATE barang SET counter=$r[counter]+1 
              WHERE id_barangpw08='$_GET[id]'"); 
    echo "
			 <div class=jud>$r[nama_barangpw08]</div><br> 
			 <span class=tulis>Kategori: <b><u>$r[nama_kategoripw08]</u></b><br> 
  
  <p>$r[stock]</p>";
  echo "<td align=center>
        <a href=javascript:history.go(-1)> [ Kembali ]</a> </td><br><br>";
}
 
?>