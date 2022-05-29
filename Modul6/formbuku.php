<?php
	require_once('koneksi.php');
	session_name("verify");
	session_start();
	if(empty($_SESSION['login_user'])){ header('location:errorpage.php'); }
?>
<body>
	<?php
		include("model.php");
		if(isset($_GET['id_buku'])) {editbuku(); $id = $_GET['id_buku'];} 
	?>
	
	<a href="buku.php">Tampil Data</a>
    <?php
		if(isset($_GET['id_buku'])) echo "<h1>Update Buku</h1>";
		else echo "<h1>Tambah Buku</h1>";
	?>
    <form name="tambahbuku" action="" method="POST">
        <label>Judul: </label><br/>
        <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required/><br/><br/>
		<label>Penulis: </label><br/>
        <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ? "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required/><br/><br/>
        <label>Penerbit: </label><br/>
        <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required><br/><br/>
        <label>Tahun Terbit:</label><br/>
        <input type="number" name="terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required /><br/><br/>
        <?php
			if(isset($_GET['id_buku'])) echo "<input name='updatebuku' type='submit' value='update'>";
			else echo "<input name='addbuku' type='submit' value='Tambah'>";
		?>		
    </form>
	<?php
		if(isset($_POST['addbuku']) && ($_POST['judul']) && ($_POST['penulis']) && ($_POST['penerbit']) && ($_POST['terbit'])){
			tambahbuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['terbit']);
		}
		if(isset($_POST['updatebuku']) && ($_POST['judul']) && ($_POST['penulis']) && ($_POST['penerbit']) && ($_POST['terbit'])){
			updatebuku($id , $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['terbit']);
		}
	?>
</body>