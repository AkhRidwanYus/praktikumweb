<html>
	<head>
		<title></title>
		<style>
			table {border-collapse: collapse}
			td {
				border: 1px solid; 
				text-align: center; 
				width: 40px; 
				height: 40px
			}
		</style>
	</head>
	<body>
		<form action="" method="POST">
			Panjang : <input type="number" name="panjang" value="<?=isset($_POST["panjang"]) ? $_POST["panjang"] : ''?>"><br>
			Lebar : <input type="number" name="lebar" value="<?=isset($_POST["lebar"]) ? $_POST["lebar"] : ''?>"><br>
			Nilai : <input type="text" name="nilai" value="<?=isset($_POST["nilai"]) ? $_POST["nilai"] : ''?>"><br>
			<button type="submit" name="cetak">Cetak</button>
		</form>
		<?php
			if(isset($_POST["cetak"])){
				$x = 0;
				$y = 0;
				echo "<br>";
				if(isset($_POST["panjang"])){
					$x = $_POST["panjang"];
				}
				if(isset($_POST["lebar"])){
					$y = $_POST["lebar"];
				}
				$matriksize = $x * $y;
				if(isset($_POST["nilai"])){
					$nilai = explode(" ", $_POST["nilai"]);
					$temp = count($nilai);
					while($temp < $matriksize){
						array_push($nilai, " ");
						$temp ++;
					}						
					$jumlah = count($nilai);
				}
				echo "<br>";
				if($matriksize == $jumlah){
					$i = 0;
					$urutan = 0;
					while($i < $y){
						$j = 0;
						while($j < $x){
							$tampil[$j][$i] = $nilai[$urutan];
							$urutan ++;
							$j ++;
							}
						$i ++;
					}
					$i = 0;
					echo "<table>";
					while($i < $y){
						$j = 0;
						echo "<tr>";
						while($j < $x){
							$aa = $tampil[$j][$i];
							echo "<td> $aa </td>";
							$j ++;
						}
						echo "</tr>";
						$i ++;
					}
					echo "</table>";
				}
				else{echo "Panjang nilai tidak sesuai dengan ukuran matriks";}
			}
		?>
	</body>
</html>
