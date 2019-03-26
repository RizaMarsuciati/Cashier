<script language="javascript">
function validasi(form){
  if (form.judul.value == ""){
    alert("Anda belum menginputkan Barang");
    form.judul.focus();
    return (false);
  }
  return (true);
}
</script>

<?php

  echo "<h2>INPUT SUPPLIER</h2>
        <form method=POST action=?p=input_suplier enctype='multipart/form-data' onsubmit=\"return validasi(this)\">
        <table width=\"100%\">
        <tr><td>SUPPLIER</td>     <td> : <input type=text name=nama_suplier size=60></td></tr>
		 <tr><td>ADDRESS</td>     <td> : <input type=text name=alamat_suplier size=60></td></tr>
		 
		 <tr><td>PHONE</td>     <td> : <input type=text name=telp_suplier size=60></td></tr>
		 
        
        
        <tr><td colspan=2><input type=submit value=Save>
        <input type=button value=Cancel onclick=self.history.back()></td></tr>
        </table>
        </form>"

?>
