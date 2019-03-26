<?php

echo "<h2>TRANSACTION INFORMATION</h2>
        <table id=tables width='100%'>
        <tr><th>No</th><th>ID TRANSACTION</th><th>ID ITEM</th><th>TOTAL</th><th>PAY</th><th>CHANGE</th><th>OPTION</th></th></tr>";
  $no = 1;
  $tampil=mysqli_query($connect,"SELECT * FROM transaksi ORDER BY id_transaksipw08 DESC");	
  while ($r=mysqli_fetch_array($tampil)){
    
    echo "<tr><td align='center'>$no</td>
	<td>$r[id_transaksipw08]</td>
		<td>$r[id_barangpw08]</td>
          <td>$r[total]</td>
          <td>$r[uang_masuk]</td>
		  <td>$r[uang_kembali]</td>
		      <td align='center'><a href=?p=hapus_transaksi&id=$r[id_transaksipw08] onClick=\"return confirm('YOU WILL DO TRANSACTION TO $r[id_transaksipw08]?')\">Process</a></td>
		    </tr>";
    $no++;
  }
    echo "<tr><td colspan=6>&nbsp;</td>
          <td align='center'><a href=?p=form_transaksi>Add</a></td>
		    </tr>";
  echo "</table>";
?>