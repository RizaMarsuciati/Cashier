<script language="javascript">
function validasi(form){
  if (form.kategori.value == ""){
    alert("Anda belum mengisikan Kategori Barang");
    form.kategori.focus();
    return (false);
  }
  return (true);
}
</script>

<?php

echo "<h2>INPUT CATEGORYS</h2>
	<form action=?p=input_kategori method=POST onsubmit=\"return validasi(this)\"> 
	  <fieldset>
	  <legend><b>Form Kategori</b></legend>
	  <table>
		<tr><td>Categorys </td>
			<td>: <input type=text name=kategori /></td>
		</tr>
		<tr><td>&nbsp;</td>
			<td><input type=submit name=submit value=Save /> <input type=button value=Cancel onclick=self.history.back()></a> </td>
		</tr>
		</table>
		</fieldset>
	</form>";
?>