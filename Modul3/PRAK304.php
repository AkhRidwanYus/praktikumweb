<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			session_start();
			if (!isset($_POST["bintang"])) $bintang = 0;
			if(isset($_POST["submit"])){
				if(isset($_POST["bintang"])){
					$bintang = $_POST["bintang"];
				}
			}
			if(isset($_POST["tambah"])){
				$bintang = $_POST["bintang"];
				$bintang ++;
			}
			if(isset($_POST["kurang"])){
				$bintang = $_POST["bintang"];
				$bintang --;
			}
			if($bintang > 0){
				echo "Jumlah bintang $bintang<br><br><br>";
				$i = 1;
				while($i <= $bintang){
					echo "<img src=\"bintang.png\" style=\"width: 64px\">";
					$i ++;
				}
			}
			if($bintang == 0 ){ ?>
				<form action="" method="POST">
					<label>Jumlah Bintang: </label>
					<input type="number" name="bintang" min="1"><br>
					<button type="submit" name="submit">Submit</button>
				</form>
		<?php }
			else{ ?>
				<form action="" method="POST">
					<button type="submit" name="tambah">Tambah</button>
					<button type="submit" name="kurang">Kurang</button>
					<input type="number" name="bintang" value="<?php echo $bintang ?>" hidden> 
				</form>
		<?php } ?>
	</body>
</html>