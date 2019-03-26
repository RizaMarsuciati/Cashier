<?php

$masuk = mysqli_query($connect,"insert into kategori_barang 
                    (nama_kategoripw08) 
             values ('$_POST[kategori]')");
			 
if($masuk){		
	echo "SAVED";	 
	echo "<meta http-equiv='refresh' content='0; url=?p=tampil_kategori'>";
}
else{
	echo "FAILED</br>";
	echo "THERE IS ERROR : ".mysqli_error();
}
?>


