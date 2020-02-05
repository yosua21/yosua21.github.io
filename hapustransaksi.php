<?php 
include_once ("koneksi.php");
$idtransaksi= $_GET['idtransaksi'];
$result= mysqli_query($con, "DELETE FROM transaksi WHERE idtransaksi='$idtransaksi'");

header ("location:datatransaksi.php");

?>