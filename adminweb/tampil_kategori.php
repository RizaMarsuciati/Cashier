<?php

echo "<h2>ITEMS CATEGORYS</h2>
<table id=tables width=250>
	<tr><th>No</th><th>CATEGORYS</th><th>ACTION</th></tr>";
	$no = 1;	
	$tampil = mysqli_query($connect,"select * from kategori_barang ORDER BY id_kategoripw08 DESC");
	while ($r=mysqli_fetch_array($tampil)){
	
echo "<tr><td>$no</td>
		<td>$r[nama_kategoripw08]</td>
		<td align=center>
			<a href=?p=edit_kategori&id=$r[id_kategoripw08]>Edit</a> || 
			<a href=?p=hapus_kategori&id=$r[id_kategoripw08] onClick=\"return confirm('DO YOU WANT TO DELETE $r[nama_kategoripw08]?')\">Delete</a></td>
	</tr>";
	$no++;
  }
    echo "<tr><td colspan=2>&nbsp;</td>
          <td align='center'><a href=?p=form_kategori>Add</a></td>
		    </tr>";
  echo "</table>";
?>