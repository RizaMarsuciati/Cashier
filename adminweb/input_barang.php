<?php


  $masuk = mysqli_query($connect,"INSERT INTO barang(nama_barangpw08,
                                  id_kategoripw08,
								  id_suplier,
                                  harga,
                                  stock)
								   
                          VALUES('$_POST[nama_barangpw08]',
                                 '$_POST[kategori]',
								 '$_POST[suplier]',
                                 '$_POST[harga]',
                                 '$_POST[stock]')");
								 
                                 

if($masuk){		
	echo "SAVE";	 
	echo "<meta http-equiv='refresh' content='0; url=?p=tampil_barang'>";
}
else{
	echo "FAILED</br>";
	echo "THERE IS ERROR : ".mysqli_error();
}
 
?>


