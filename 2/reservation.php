<?php
$server ="localhost";
$Name   ="root";
$password="";
$db_name="reservasai";

$conn = mysqli_connect($server,$Name,$password,$db_name);


function queryData($data) {
  global $conn;
  $Name   =$data['Name'];
  $Date   =$data['Date'];
  $Time   =$data['Time'];
  $Person =$data['Person'];
  mysqli_query($conn,"INSERT INTO pemesanan VALUES ('',
      '$Name','$Date','$Time','$Person')") or die("Menyimpan data GAGAL <meta http-equiv=refresh content=3;url=menu.php>");
      echo "Menyimpan Data BERHASIL <meta http-equiv=refresh content=3;url=menu.php>";
}






 ?>
