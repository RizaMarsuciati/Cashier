<?php

mysqli_query($connect,"DELETE FROM barang WHERE id_barangpw08='$_GET[id]'");

echo "<meta http-equiv='refresh' content='0; url=?p=tampil_barang'>";
?>

