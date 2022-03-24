<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST">
			<label>Nilai : </label>
			<input type="number" name="angka" value="<?=isset($_POST["angka"]) ? $_POST["angka"] : ''?>"><br>
			<button type="submit" name="submit">Konversi</button>
		</form>
		<?php
			$hasil = NULL;
			if(isset($_POST["submit"])){
				if($_POST["angka"] < 0 || $_POST["angka"] >= 1000){$hasil = "Anda Menginput Melibihi Limit Bilangan";}
				else{
					if($_POST["angka"] == 0){$hasil = "Nol";}
					else if($_POST["angka"] > 0 && $_POST["angka"] < 10){$hasil = "Satuan";}
					else if($_POST["angka"] >= 10 && $_POST["angka"] < 20){$hasil = "Belasan";}
					else if($_POST["angka"] >= 20 && $_POST["angka"] < 100){$hasil = "Puluhan";}
					else if($_POST["angka"] >= 100 && $_POST["angka"] < 1000){$hasil = "Ratusan";}
				}
				echo "<h1>Hasil: $hasil</h1>";
			}
		?>
	</body>
</html>
