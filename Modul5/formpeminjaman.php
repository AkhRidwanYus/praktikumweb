<body>
	<?php
		include("model.php");
		if(isset($_GET['id_peminjaman'])) {editpeminjaman(); $id = $_GET['id_peminjaman'];} 
	?>
	
	<a href="peminjaman.php">Tampil Data</a>
    <?php
		if(isset($_GET['id_peminjaman'])) echo "<h1>Update Peminjaman</h1>";
		else echo "<h1>Tambah Peminjaman</h1>";
	?>
    <form name="tambahpeminjaman" action="" method="POST">
        <label>Tanggal Pinjam: </label><br/>
        <input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required/><br/><br/>
		<label>Tanggal Kembali: </label><br/>
        <input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ? "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required/><br/><br/>
        <?php
			if(isset($_GET['id_peminjaman'])) echo "<input name='updatepeminjaman' type='submit' value='update'>";
			else echo "<input name='addpeminjaman' type='submit' value='Tambah'>";
		?>		
    </form>
	<?php
		if(isset($_POST['addpeminjaman']) && ($_POST['pinjam']) && ($_POST['kembali'])){
			tambahpeminjaman($_POST['pinjam'], $_POST['kembali']);
		}
		if(isset($_POST['updatepeminjaman']) && ($_POST['pinjam']) && ($_POST['kembali'])){
			updatepeminjaman($id , $_POST['pinjam'], $_POST['kembali']);
		}
	?>
</body>