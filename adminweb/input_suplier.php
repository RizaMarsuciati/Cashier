<?php


  $masuk = mysqli_query($connect,"INSERT INTO suplier(nama_suplier,
                                  alamat_suplier,
                                  telp_suplier)
                                  
								   
                          VALUES('$_POST[nama_suplier]',
                                 '$_POST[alamat_suplier]',
                                 '$_POST[telp_suplier]')");
                                 
								 
                                 

if($masuk){		
	echo "SAVED";	 
	echo "<meta http-equiv='refresh' content='0; url=?p=tampil_suplier'>";
}
else{
	echo "FAILED</br>";
	echo "THERE IS ERROR : ".mysqli_error();
}
 
?>


