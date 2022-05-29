<?php
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
			echo "<a href='index.php?keluar=1' onclick='return confirm(\'LogOut?\')>Logout</a>";
		} 
	?>
	</div>
	<span align="center">
		<h1>Selamat datang<br>Di Database Modul 5</h1>
		<h3>Akhmad Ridwan Yusuf<br>201081710020<h3>
		<a href="member.php">Tabel Member</a><br>
		<a href="buku.php">Tabel Buku</a><br>
		<a href="peminjaman.php">Tabel Peminjaman</a><br>
	</span>
</body>