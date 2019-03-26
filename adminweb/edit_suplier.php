<?php

  $edit = mysqli_query($connect,"SELECT * FROM suplier WHERE id_suplier='$_GET[id]'");
  $r    = mysqli_fetch_array($edit);

  echo "<h2>EDIT SUPPLIER</h2>
        <form method=POST enctype='multipart/form-data' action=?p=update_suplier>
		
        <table width=510>
		<input type=hidden name=id value=$r[id_suplier]>
        <tr><td>SUPPLIER</td>     <td> : <input type=text name=nama_suplier size=40 value='$r[nama_suplier]'></td></tr>
		<tr><td>ADDRESS</td>     <td> : <input type=text name=alamat_suplier size=40 value='$r[alamat_suplier]'></td></tr>
		<tr><td>PHONE</td>     <td> : <input type=text name=telp_suplier size=40 value='$r[telp_suplier]'></td></tr>
		
        
       
        <tr><td colspan=2><input type=submit value=Update>
        <input type=button value=Cancel onclick=self.history.back()></td></tr>
        </table>
        </form>";
?>
