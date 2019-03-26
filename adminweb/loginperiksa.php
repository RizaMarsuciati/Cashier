<?php


include "../config/koneksi.php";


$username    = $_POST['TxtUser'];
$password    = $_POST['TxtPasswd'];


$password_md5   = md5($password);


$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$password_md5'");
$row=mysqli_fetch_array($login);


if ($row['username'] == $username AND $row['password'] == $password_md5)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:index.php');
}
else
{
  echo "<center><br><br><br><br><br><br><b>LOGIN FAILED! </b><br>
        INCORRECT PASSWORD OR USERNAME.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='TRY AGAIN' onclick=location.href='login.php'></a></center>";
}

?>
