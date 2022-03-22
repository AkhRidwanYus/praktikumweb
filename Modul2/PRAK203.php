<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST">
			<label>Nilai : </label>
			<input type="number" name="suhu" value="<?=isset($_POST["suhu"]) ? $_POST["suhu"] : ''?>"><br>
			<label>Dari : </label><br>
			<input type="radio" name="dari" value="Celcius" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Celcius") echo "checked";?>>Celcius<br>
			<input type="radio" name="dari" value="Fahrenheit" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Fahrenheit") echo "checked";?>>Fahrenheit<br>
			<input type="radio" name="dari" value="Rheamur" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Rheamur") echo "checked";?>>Rheamur<br>
			<input type="radio" name="dari" value="Kelvin" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Kelvin") echo "checked";?>>Kelvin<br>
			<label>Ke : </label><br>
			<input type="radio" name="ke" value="Celcius" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Celcius") echo "checked";?>>Celcius<br>
			<input type="radio" name="ke" value="Fahrenheit" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Fahrenheit") echo "checked";?>>Fahrenheit<br>
			<input type="radio" name="ke" value="Rheamur" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Rheamur") echo "checked";?>>Rheamur<br>
			<input type="radio" name="ke" value="Kelvin" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Kelvin") echo "checked";?>>Kelvin<br>
			<button type="submit" name="submit">Konversi</button>
		</form>

		<?php
			$awal = NULL;
			$hasil = NULL;
			$derajat = NULL;
			if(isset($_POST["submit"])){
				$awal = $_POST["suhu"];

				if($_POST["dari"] == "Celcius"){
					if ($_POST["ke"] == "Celcius") {
						$hasil = $awal;
					}
					else if ($_POST["ke"] == "Fahrenheit") {
						$hasil = ($awal * 9 / 5) + 32;
					}
					else if ($_POST["ke"] == "Rheamur") {
						$hasil = $awal * 4/5;
					}
					else if ($_POST["ke"] == "Kelvin") {
						$hasil = $awal + 273.15;
					}
				}
				else if($_POST["dari"] == "Fahrenheit"){
					if ($_POST["ke"] == "Celcius") {
						$hasil = ($awal - 32) * 5 / 9;
					}
					else if ($_POST["ke"] == "Fahrenheit") {
						$hasil = $awal;
					}
					else if ($_POST["ke"] == "Rheamur") {
						$hasil = (($awal - 32) * 5 / 9) * 4 / 5;
					}
					else if ($_POST["ke"] == "Kelvin") {
						$hasil = (($awal - 32) * 5 / 9) + 273.15;
					}
				}
				else if($_POST["dari"] == "Rheamur"){
					if ($_POST["ke"] == "Celcius") {
						$hasil = $awal * 5 / 4;
					}
					else if ($_POST["ke"] == "Fahrenheit") {
						$hasil = (($awal * 5 / 4) * 9 / 5) + 32;
					}
					else if ($_POST["ke"] == "Rheamur") {
						$hasil = $awal;
					}
					else if ($_POST["ke"] == "Kelvin") {
						$hasil = ($awal * 5 / 4) + 273.15;
					}
				}
				else if($_POST["dari"] == "Kelvin"){
					if ($_POST["ke"] == "Celcius") {
						$hasil = $awal - 273.15;
					}
					else if ($_POST["ke"] == "Fahrenheit") {
						$hasil = (($awal - 273.15) * 9 / 5) + 32;
					}
					else if ($_POST["ke"] == "Rheamur") {
						$hasil = ($awal - 273.15) * 4 / 5;
					}
					else if ($_POST["ke"] == "Kelvin") {
						$hasil = $awal;
					}
				}

				if($_POST["ke"] == "Celcius") {$derajat = "&degC";}
				else if($_POST["ke"] == "Fahrenheit") {$derajat = "&degF";}
				else if($_POST["ke"] == "Rheamur") {$derajat = "&degR";}
				else if($_POST["ke"] == "Kelvin") {$derajat = "&degK";}
				echo "<h1>Hasil konversi: $hasil $derajat</h1>";
			}
			
			
		?>
	</body>
</html>