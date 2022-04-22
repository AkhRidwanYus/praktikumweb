<html>
	<head>
		<title></title>
		<style>
			table {border-collapse: collapse}
			td {
				border: 1px solid; 
				width: 120px; 
				height: 40px;
				padding: 5px
			}
			.labe {
				background-color: #D3D3D3;
				font-weight: bold;
			}
		</style>
	</head>
	<body>			
			<?php
				$array = [
					["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
					["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
					["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
					["nama" => "Jessica", "nim" => "2101004", "uts" => 87, "uas" => 65],
				];
				$i = 0;
				echo "<table>";
				echo "<tr class=\"labe\">";
				echo "<td>Nama</td><td>NIM</td><td>Nilai UTS</td><td>Nilai UAS</td><td>Nilai Akhir</td><td>Huruf</td>";
				echo "</tr>";
				while($i < 4){
					$jumlah = ($array[$i]["uts"] * 0.4) + ($array[$i]["uas"] * 0.6);
					$huruf = "E";
					if ($jumlah >= 80){$huruf = "A";}
					else if ($jumlah >= 70 && $jumlah <= 79){$huruf = "B";}
					else if ($jumlah >= 60 && $jumlah <= 69){$huruf = "C";}
					else if ($jumlah >= 50 && $jumlah <= 59){$huruf = "D";}
					else{$huruf = "E";}
					echo "<tr>";
					echo "<td>".$array[$i]["nama"]."</td>";
					echo "<td>".$array[$i]["nim"]."</td>"; 
					echo "<td>".$array[$i]["uts"]."</td>"; 
					echo "<td>".$array[$i]["uas"]."</td>"; 
					echo "<td>$jumlah</td>";
					echo "<td>$huruf</td>";			
					echo "</tr>";
					$i ++;
				}
				echo "</table>";
			?>
		</form>
	</body>
</html>