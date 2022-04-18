<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			.ganjil {color: red}
			.genap {color: green}
		</style>
	</head>
	<body>
		<form action="" method="POST">
			<label>Jumlah Peserta : </label>
			<input type="number" name="jumlah" value="<?=isset($_POST["jumlah"]) ? $_POST["jumlah"] : ''?>"><br>
			<button type="submit" name="submit">Cetak</button>
		</form>
		
		<?php
			$i = 1;
			$batas = NULL;
			if(isset($_POST["submit"])){
				if(isset($_POST["jumlah"])){
					$batas = $_POST["jumlah"];
				}
				while($i <= $batas){
					if($i % 2 == 0){
						echo "<h2 class=\"genap\">Peserta ke-$i</h2>";
					}
					else{
						echo "<h2 class=\"ganjil\">Peserta ke-$i</h2>";
					}
					$i ++;
				}
			}
		?>
	</body>
</html>