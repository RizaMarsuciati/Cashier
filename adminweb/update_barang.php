<?php

   $ubah = mysqli_query($connect,"UPDATE barang SET nama_barangpw08   = '$_POST[nama_barangpw08]',
                               harga = '$_POST[harga]',
							   stock  = '$_POST[stock]'  
                           WHERE id_barangpw08 = '$_POST[id]'"); 
  if($ubah){    
  echo "DATA IS CHANGER SUCCESSFULLY";   
  echo "<meta http-equiv='refresh' content='0; url=?p=tampil_barang'>";
}
else{
  echo "DATA IS FAILED TO CHANGEER</br>";
  echo "THERE IS ERROR : ".mysql_error();
}       
?>
