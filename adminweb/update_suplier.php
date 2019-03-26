<?php

   $ubah = mysqli_query($connect,"UPDATE suplier SET nama_suplier   = '$_POST[nama_suplier]',
                               alamat_suplier = '$_POST[alamat_suplier]',
							   telp_suplier  = '$_POST[telp_suplier]'  
                           WHERE id_suplier = '$_POST[id]'"); 
  if($ubah){    
  echo "DATA IS CHANGER SUCCESSFULLY";   
  echo "<meta http-equiv='refresh' content='0; url=?p=tampil_suplier'>";
}
else{
  echo "DATA IS FAILED TO CHANGEER</br>";
  echo "THERE IS ERROR : ".mysql_error();
}       
?>
