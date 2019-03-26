<?php


  $masuk = mysqli_query($connect,"INSERT INTO transaksi(id_barangpw08,
								  jml_barang,
								  total,
								  uang_masuk,
								  uang_kembali)
                                  
                                   
                          VALUES('$_POST[id_barangpw08]',
                                 '$_POST[jml_barang]',
								 '$_POST[total]',
								 '$_POST[uang_masuk]',
								 '$_POST[uang_kembali]')");
                                 
								 
                                 

if($masuk){		
	echo "SAVED";	 
	echo "<meta http-equiv='refresh' content='0; url=?p=tampil_transaksi'>";
	  $masuk = mysqli_query($connect,"UPDATE barang SET stock = stock-$_POST[jml_barang] WHERE id_barangpw08 = $_POST[id_barangpw08]");
}
else{
	echo "FAILED</br>";
	echo "THERE IS ERROR : ".mysqli_error($connect);
}
 
?>


