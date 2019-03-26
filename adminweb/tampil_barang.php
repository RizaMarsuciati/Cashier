<?php

echo "<h2>ITEM INFORMATION</h2>
        <table id=tables width='100%'>
        <tr><th>No</th><th>ITEM ID</th><th>ITEM</th><th>STOCK</th><th>PRICE</th><th>ACTION</th></th></tr>";
  $no = 1;
  $tampil=mysqli_query($connect,"SELECT * FROM barang ORDER BY id_barangpw08 DESC");	
  while ($r=mysqli_fetch_array($tampil)){
    
    echo "<tr><td align='center'>$no</td>
	<td>$r[id_barangpw08]</td>
          <td>$r[nama_barangpw08]</td>
          <td>$r[stock]</td>
		  <td>$r[harga]</td>
		      <td align='center'><a href=?p=edit_barang&id=$r[id_barangpw08]>Edit</a> ||
		      <a href=?p=hapus_barang&id=$r[id_barangpw08] onClick=\"return confirm('DO YOU WANT TO DELETE $r[nama_barangpw08]?')\">Delete</a></td>
		    </tr>";
    $no++;
  }
    echo "<tr><td colspan=5>&nbsp;</td>
          <td align='center'><a href=?p=form_barang>Add</a></td>
		    </tr>";
  echo "</table>";
?>