<?php

  $edit = mysqli_query($connect,"SELECT * FROM barang WHERE id_barangpw08='$_GET[id]'");
  $r    = mysqli_fetch_array($edit);

  echo "<h2>EDIT ITEM</h2>
        <form method=POST enctype='multipart/form-data' action=?p=update_barang>
		
        <table width=510>
		<input type=hidden name=id value=$r[id_barangpw08]>
        <tr><td>ITEMS</td>     <td> : <input type=text name=nama_barangpw08 size=40 value='$r[nama_barangpw08]'></td></tr>
		<tr><td>STOCKS</td>     <td> : <input type=text name=stock size=40 value='$r[stock]'></td></tr>
		<tr><td>PRICE</td>     <td> : <input type=text name=harga size=40 value='$r[harga]'></td></tr>
		
        <tr><td>ITEM CATEGORYS</td>  <td> : <select name=kategori>";
		
 
  $tampil=mysqli_query($connect,"SELECT * FROM kategori_barang ORDER BY nama_kategoripw08");
  while($w=mysqli_fetch_array($tampil)){
    if ($r[id_kategoripw08]==$w[id_kategoripw08]){
      echo "<option value=$w[id_kategoripw08] selected>$w[nama_kategoripw08]</option>";
    }
    else{
      echo "<option value=$w[id_kategoripw08]>$w[nama_kategoripw08]</option>";
    }
  }
  echo "</select></td></tr>
       
        <tr><td colspan=2><input type=submit value=Update>
        <input type=button value=Cancel onclick=self.history.back()></td></tr>
        </table>
        </form>";
?>
