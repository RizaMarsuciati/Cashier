<?php

$ubah = mysqli_query($connect,"UPDATE kategori_barang SET nama_kategoripw08 = '$_POST[kategori]'
                    WHERE id_kategoripw08= '$_POST[id]'");
	
if($ubah){		
	echo "DATA IS CHANGER SUCCESSFULLY";	 
	echo "<meta http-equiv='refresh' content='0; url=?p=tampil_kategori'>";
}
else{
	echo "DATA IS FAILED TO CHANGEER</br>";
	echo "THERE IS ERROR : ".mysqli_error();
}						
?>



