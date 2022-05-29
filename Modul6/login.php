<?php
	require_once("koneksi.php");
	session_name("verify");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$admin = konek()->prepare('SELECT * FROM member WHERE id_member = :id and pass = :password');
		$admin->execute(array(
			':id' => $_POST['id'],
			':password' => $_POST['pass']
		));
		$row = $admin->fetch(PDO::FETCH_ASSOC);
		if(empty($row['id_member']))
		{
			echo "Username atau password yang dimasukan tidak valid";
			echo"<br/><a href='formlogin.php'>Login Ulang</a>";
		}
		else 
		{
			$_SESSION['login_user'] = $_POST['id'];
			$_SESSION['nama_member'] = $row['nama_member'];
			header("location: index.php");
		}
	}
?>
