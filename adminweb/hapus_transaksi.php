<?php

mysqli_query($connect,"DELETE FROM transaksi WHERE id_transaksipw08='$_GET[id]'");
echo "Transaction Successfuly, Thank You";	
//echo "<meta http-equiv='refresh' content='0; url=?p=tampil_transaksi'>";
?>

