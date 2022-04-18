<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST">
			<label>Batas Bawah : </label>
			<input type="number" name="bawah" value="<?=isset($_POST["bawah"]) ? $_POST["bawah"] : ''?>"><br>
			<label>Batas Atas : </label>
			<input type="number" name="atas" value="<?=isset($_POST["atas"]) ? $_POST["atas"] : ''?>"><br>
			<button type="submit" name="submit">Cetak</button>
		</form>
		<br>
		<?php
			$atas = NULL;
			$i = NuLL;
			if(isset($_POST["submit"])){
				if(isset($_POST["atas"])){
					$atas = $_POST["atas"];
				}
				if(isset($_POST["bawah"])){
					$i = $_POST["bawah"];
				}
				do{
					if(($i + 7) % 5 == 0){
						echo "<img src=\"bintang.png\" style=\"width: 16px\"> ";
					}
					else {
						echo "$i ";
					}
					$i ++;
				}while($i <= $atas);
			}
		?>
	</body>
</html>