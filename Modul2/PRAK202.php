<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			.er {color: red;}
		</style>
	</head>
	<body>
		<?php
		    $naer = "";
			$nier = "";
			$geer = "";
			if(isset($_POST["submit"])){
				if (empty($_POST["nama"])) {
					$naer = "Nama tidak boleh kosong";
				}

				if (empty($_POST["nim"])) {
					$nier = "Nim tidak boleh kosong";
				}

				if (empty($_POST["gender"])) {
					$geer = "Jenis kelamin tidak boleh kosong";
				}
			}
		?>
		<form action="" method="POST">
			<label>Nama: </label>
			<input type="text" name="nama" value="<?=isset($_POST["nama"]) ? $_POST["nama"] : ''?>"><span class="er">* <?php echo $naer;?></span><br>
			<label>NIM: </label>
			<input type="number" name="nim"value="<?=isset($_POST["nim"]) ? $_POST["nim"] : ''?>"><span class="er">* <?php echo $nier;?></span><br>
			<label>Jenis Kelamin:</label><span class="er">* <?php echo $geer;?></span><br>
			<input type="radio" name="gender" value="Laki-laki" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Laki-laki") echo "checked";?>>Laki-laki<br>
			<input type="radio" name="gender" value="Perempuan" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Perempuan") echo "checked";?>>Perempuan<br>
			<button type="submit" name="submit">submit</button>
		</form>

		<?php
			$nama = NULL;
			$nim = NULL;
			$gender = NULL;

			if(isset($_POST["submit"])){
				if(!empty($_POST["nama"]) && !empty($_POST["nim"]) && !empty($_POST["gender"])){
					echo"<h1>Output : </h1>";
					if (!empty($_POST["nama"])) {
						$nama = $_POST["nama"];
					}

					if (!empty($_POST["nim"])) {
						$nim = $_POST["nim"];
					}

					if (!empty($_POST["gender"])) {
						$gender = $_POST["gender"];
					}
				}
			}
			
			echo "$nama <br> $nim <br> $gender"
		?>
	</body>
</html>