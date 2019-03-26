<?php

$edit = mysqli_query($connect,"select * from kategori_barang where id_kategoripw08 = '$_GET[id]'");
$r    = mysqli_fetch_array($edit);

echo "<h2>INPUT ITEM CATEGORYS</h2>
	<form action=?p=update_kategori method=POST>
	<fieldset>
	  <legend><b>Form Edit Kategori</b></legend>
	<table width=300>
	<input type=hidden name=id value='$r[id_kategoripw08]'/>
		<tr>
			<td>Categorys </td>
			<td>: <input type=text name=kategori value='$r[nama_kategoripw08]' /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type=submit name=submit value=Update /> <input type=button value=Cancel onclick=self.history.back()></td></tr></td>
		</tr>
		</table>
		</fieldset>
	</form>";

?>


