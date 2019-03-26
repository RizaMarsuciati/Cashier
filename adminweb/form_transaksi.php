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

  echo "<h2>TRANSACTION</h2>
        <form method=POST action=?p=input_transaksi enctype='multipart/form-data' onsubmit=\"return validasi(this)\">
        <table width=\"100%\">
       
		 
		 
        <tr><td>ITEM</td>  <td> : 
        <select onchange='isi_otomatis()' id=id_barangpw08 name=id_barangpw08>
        <option value=0 selected>- SELECT ITEM -</option>";
 
  $tampil=mysqli_query($connect,"SELECT * FROM barang ORDER BY nama_barangpw08");
  while($r=mysqli_fetch_array($tampil)){
    echo "<option value=$r[id_barangpw08]>$r[nama_barangpw08]</option>";
  }
  echo "</select></td></tr>
   		<tr><td>QTY</td>     <td> : <input onkeyup='hitung()' type=text id=jml_barang name=jml_barang size=60 value=1></td></tr>
		<tr><td>PRICE</td>     <td> : <input readonly type=text id=harga name=harga size=60 value=0></td></tr>
		<tr><td>TOTAL</td>     <td> : <input readonly type=text id=total name=total size=60></td></tr>
		<tr><td>PAY</td>     <td> : <input onkeyup='hitung()' type=text id=uang_masuk name=uang_masuk size=60 value=0></td></tr>
		<tr><td>CHANGE</td>     <td> : <input readonly type=text id=uang_kembali name=uang_kembali size=60></td></tr>
        
        <tr><td colspan=2><input type=submit value=Save>
        <input type=button value=Cancel onclick=self.history.back()></td></tr>
        </table>
        </form>"
		

?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script type="text/javascript">
		 
		 function isi_otomatis(){
			 var id_barangpw08 = $("#id_barangpw08").val();
			 $.ajax({
				 url:'proses_transaksi.php',
				 data:"id_barangpw08="+id_barangpw08,
			 }).success(function (data){
				 var json = data;
				 obj = JSON.parse(json);
				 $('#harga').val(obj.harga);
				 hitung();
			 });
		 }
		 function hitung(){
			 var jml_barang = $("#jml_barang").val();
			 var harga = $("#harga").val();
			 var uang_masuk = $("#uang_masuk").val();
			 var total = jml_barang*harga;
			 $('#total').val(total);
			 var uang_kembali = uang_masuk-total;
			 $('#uang_kembali').val(uang_kembali);
		 }
		 
			 </script>
