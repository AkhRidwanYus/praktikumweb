<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			td {text-align: right}
		</style>
	</head>
	<body>
		<form action="" method="POST">
			<label>Tinggi : </label>
			<input type="number" name="tinggi" value="<?=isset($_POST["tinggi"]) ? $_POST["tinggi"] : ''?>"><br>
			<label>Alamat Gambar : </label>
			<input type="text" name="alamat" value="<?=isset($_POST["alamat"]) ? $_POST["alamat"] : ''?>"><br>
			<button type="submit" name="submit">Cetak</button>
		</form>
		<br>
		<?php
			$i = 1;
			$tinggi = NULL;
			$alamat = NULL;
			if(isset($_POST["submit"])){
				echo "<br>";
				if(isset($_POST["tinggi"])){
					$tinggi = $_POST["tinggi"];
				}
				if(isset($_POST["alamat"])){
					$alamat = $_POST["alamat"];
				}
				echo "<table>";
				while($tinggi >= $i){
					$j = 1;
					echo "<tr><td>";
					while($j <= $tinggi){
						echo "<img src=\"$alamat\" style=\"width: 24px\">";
						$j ++;
					}
					echo "</td></tr>";
					$tinggi --;
				}
				echo "</table>";
			}
		?>
	</body>
</html>