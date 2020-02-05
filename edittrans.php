<?php
    include_once("koneksi.php");
    
    if (isset($_POST['Tambah'])){
        $idtransaksi = $_POST['idtransaksi'];
        $tgltransaksi = $_POST['tgltransaksi'];
        $idanggota = $_POST['idanggota'];
        $idbuku = $_POST['idbuku'];
		$result = mysqli_query($con, "UPDATE transaksi SET idtransaksi='$idtransaksi', tgltransaksi='$tgltransaksi',
         idbuku = '$idbuku' WHERE idtransaksi='$idtransaksi'");

        header("Location:datatrans.php");
    }
?>
<?php
    $idtransaksi = $_GET['idtransaksi'];
	$result = mysqli_query($con, "SELECT * FROM transaksi WHERE idtransaksi='$idtransaksi'");
	
    while($user_data = mysqli_fetch_array($result)){
        $tgltransaksi= $user_data['tgltransaksi'];
        $idanggota= $user_data['idanggota'];
        $idbuku = $user_data['idbuku'];
        
    }
?>
<html>
    <head>
        <title>Edit Transaksi</title>
    </head>
        <body>
        <header align = 'center'>
            <h3>Edit Transaksi</h3>
            <br/>
            <h4><a href = 'datatrans.php'>Kembali</a></h4>
        </header>
        
            <br/><br/>

            <form  method="post"  action="edittrans.php">
                <table border="0" align="center">
					<tr>
                        <td>Id Transaksi</td>
                        <td><input type = "text" name="idtransaksi" value = <?php echo $idtransaksi;?>></td>
                    </tr>

                    <tr>
                        <td>Tgl Transaksi</td>
                        <td><input type = "datetime-local" name="tgltransaksi" value = <?php echo $tgltransaksi;?>></td>
                    </tr>

                    <tr>
                        <td>Id Anggota</td>
                        <td><input type = "text" name="idanggota" value = <?php echo $idanggota;?>></td>
                    </tr>

                    <tr>
                        <td>Id Buku</td>
                        <td><input type = "text" name="idbuku" value = <?php echo $idbuku;?>></td>
                    </tr>

                    <tr>
                        <td><input type="hidden" name="idtransaksi" value=<?php echo $_GET['idtransaksi'];?>></td>
                        <td><input type="submit" name="Tambah" value="Update"></td>
                    </tr>
                </table>
            </form>
        </body>
</html>
