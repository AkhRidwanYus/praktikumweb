<?php 
	require_once('koneksi.php'); 
	session_name("verify");
	session_start();
	if(isset($_GET['keluar'])){
        unset($_SESSION["verify"]);
		session_destroy();
	}
?>
<body>
	<div align='right'>
	<?php
	 	if (empty($_SESSION['login_user'])){
			echo "<div align='right'>Menampilkan data sebagai Tamu</div>"; 
			echo "<a href='formlogin.php'>Login</a><br>";
		}
		else{
			echo "Selamat Datang " . $_SESSION['nama_member'] . "<br>";
			echo "<a href='index.php?keluar=1' onclick='return confirm(\'LogOut?\')'>Logout</a>";
		} 
	?>
	</div>
	<a href="formpeminjaman.php">Tambah</a>
    </div>
    <table border="1">
        <thead>
			<tr>
					<th>ID Peminjaman</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
				include("model.php");
				if(isset($_GET['function']) && empty($_SESSION['login_user'])){ header('location:errorpage.php'); }
				else if(isset($_GET['function'])&&($_GET['id_peminjaman'])){ hapuspeminjaman($_GET['id_peminjaman']); }
				
				$stmt = konek()->prepare("SELECT * FROM peminjaman ORDER BY id_peminjaman ASC");
				$stmt->execute();
				$result = $stmt->fetchAll();

				if (!empty($result)) {
					foreach ($result as $row) {
						echo "<tr>";
						echo "<td>" . $row['id_peminjaman'] . "</td>";
						echo "<td>" . $row['tgl_pinjam'] . "</td>";
						echo "<td>" . $row['tgl_kembali'] . "</td>";
						echo "<td>";
						echo "<a href='formpeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'>Edit</a>";
						echo " | ";
						echo "<a href='peminjaman.php?function=1&id_peminjaman=" . $row['id_peminjaman'] . "' onclick=\"return confirm('Hapus?')\">Hapus</a>";							
						echo "</td>";
						echo "</tr>";
					}
				}
            ?>
        </tbody>
    </table>
	<a href="index.php">Kembali</a>
</body>