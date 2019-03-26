<?php

mysqli_query($connect,"DELETE FROM kategori_barang WHERE id_kategoripw08='$_GET[id]'");

echo "<meta http-equiv='refresh' content='0; url=?p=tampil_kategori'>";
?>


