<?php

echo '<table>';
$kata= $_POST['search'];

  $sql_cari="SELECT * FROM barang WHERE UPPER(nama_barangpw08) LIKE '%$kata%'";
  $qry_cari = mysqli_query($connect, $sql_cari) or die ("Gagal Query Cari");
  $jumlah=mysqli_num_rows($qry_cari);

if ($jumlah > 0){
    echo "<tr><td>
          Ditemukan <b>$jumlah</b> barang dengan kata <b>$kata</b> : <ul>"; 
    
    while($r=mysqli_fetch_array($qry_cari)){
      echo "<li><a href='?p=barangtampil&id=$r[id_barangpw08]'>$r[nama_barangpw08]</a></li>";
    }      
    echo "</ul></td></tr>";
  }
  else{
    echo "<tr><td>Tidak ditemukan barang dengan kata <b>$kata</b></td></tr>";
  }

  echo "<tr><td><br>
        [ <a href=javascript:history.go(-1)>Kembali</a> ]</td></tr>"; 
echo '</table>';
?>
