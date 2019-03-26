<?php

mysqli_query($connect,"DELETE FROM suplier WHERE id_suplier='$_GET[id]'");

echo "<meta http-equiv='refresh' content='0; url=?p=tampil_suplier'>";
?>

