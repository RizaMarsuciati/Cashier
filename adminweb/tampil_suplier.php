<?php

echo "<h2>SUPPLIER INFORMATION</h2>
        <table id=tables width='100%'>
        <tr><th>No</th><th>SUPPLIER ID</th><th>SUPPLIER</th><th>ADDRESS</th><th>PHONE</th><th>ACTION</th></th></tr>";
  $no = 1;
  $tampil=mysqli_query($connect,"SELECT * FROM suplier ORDER BY id_suplier DESC");	
  while ($r=mysqli_fetch_array($tampil)){
    
    echo "<tr><td align='center'>$no</td>
	<td>$r[id_suplier]</td>
          <td>$r[nama_suplier]</td>
          <td>$r[alamat_suplier]</td>
		  <td>$r[telp_suplier]</td>
		      <td align='center'><a href=?p=edit_suplier&id=$r[id_suplier]>Edit</a> ||
		      <a href=?p=hapus_suplier&id=$r[id_suplier] onClick=\"return confirm('DO YOU WANT TO DELETE $r[nama_suplier]?')\">Delete</a></td>
		    </tr>";
    $no++;
  }
    echo "<tr><td colspan=5>&nbsp;</td>
          <td align='center'><a href=?p=form_suplier>Add</a></td>
		    </tr>";
  echo "</table>";
?>