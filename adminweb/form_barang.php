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

  echo "<h2>INPUT ITEM</h2>
        <form method=POST action=?p=input_barang enctype='multipart/form-data' onsubmit=\"return validasi(this)\">
        <table width=\"100%\">
        <tr><td>ITEM</td>     <td> : <input type=text name=nama_barangpw08 size=60></td></tr>
		 <tr><td>STOCK</td>     <td> : <input type=text name=stock size=60></td></tr>
		 
		 <tr><td>PRICE</td>     <td> : <input type=text name=harga size=60></td></tr>
		 
        <tr><td>ITEM CATEGORYS</td>  <td> : 
        <select name=kategori>
        <option value=0 selected>- SELECT CATEGORYS -</option>";
 
  $tampil=mysqli_query($connect,"SELECT * FROM kategori_barang ORDER BY nama_kategoripw08");
  while($r=mysqli_fetch_array($tampil)){
    echo "<option value=$r[id_kategoripw08]>$r[nama_kategoripw08]</option>";
  }
  echo "</select></td></tr>
  
  <tr><td>Supplier</td>  <td> : 
        <select name=suplier>
        <option value=0 selected>- SELECT SUPPLIER -</option>";
 
  $tampil=mysqli_query($connect,"SELECT * FROM suplier ORDER BY nama_suplier");
  while($r=mysqli_fetch_array($tampil)){
    echo "<option value=$r[id_suplier]>$r[nama_suplier]</option>";
  }
  echo "</select></td></tr>
        
        <tr><td colspan=2><input type=submit value=Save>
        <input type=button value=Cancel onclick=self.history.back()></td></tr>
        </table>
        </form>"

?>
