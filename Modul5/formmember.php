<body>
	<?php
		include("model.php");
		if(isset($_GET['id_member'])) {editmember(); $id = $_GET['id_member'];} 
	?>
	
	<a href="member.php">Tampil Data</a>
    <?php
		if(isset($_GET['id_member'])) echo "<h1>Update Member</h1>";
		else echo "<h1>Tambah Member</h1>";
	?>
    <form name="tambahmember" action="" method="POST">
        <label>Nama: </label><br/>
        <input type="text" name="nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required/><br/><br/>
		<label>No Telp.: </label><br/>
        <input type="text" name="no" <?php echo (isset($_GET['id_member'])) ? "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required/><br/><br/>
        <label>Alamat: </label><br/>
        <input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required><br/><br/>
        <label>Tanggal Bergabung:</label><br/>
        <input type="datetime-local" name="tgldft" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required /><br/><br/>
		<label>Tanggal Terakhir Daftar:</label><br/>
        <input type="date" name="tgltrkhrbyr" <?php echo (isset($_GET['id_member'])) ? "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required/><br/><br/>
        <?php
			if(isset($_GET['id_member'])) echo "<input name='updatemember' type='submit' value='update'>";
			else echo "<input name='addmember' type='submit' value='Tambah'>";
		?>		
    </form>
	<?php
		if(isset($_POST['addmember']) && ($_POST['nama']) && ($_POST['no']) && ($_POST['alamat']) && ($_POST['tgldft']) && ($_POST['tgltrkhrbyr'])){
			tambahmember($_POST['nama'], $_POST['no'], $_POST['alamat'], $_POST['tgldft'], $_POST['tgltrkhrbyr']);
		}
		if(isset($_POST['updatemember']) && ($_POST['nama']) && ($_POST['no']) && ($_POST['alamat']) && ($_POST['tgldft']) && ($_POST['tgltrkhrbyr'])){
			updatemember($id , $_POST['nama'], $_POST['no'], $_POST['alamat'], $_POST['tgldft'], $_POST['tgltrkhrbyr']);
		}
	?>
</body>