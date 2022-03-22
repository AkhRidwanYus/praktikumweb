<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
		table, th {border: 1px solid;}
		td {border: 1px solid;
			front-weight:normal;
		}
		</style>
	</head>
	<body>
		<?php
			$Smartphone = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover5"];
		?>
		<table>
			<tr>
				<th>Daftar Smartphone Samsung</th>
			</tr>
			<tr>
				<td><?php echo $Smartphone[0]?></td>
			</tr>
			<tr>
				<td><?php echo $Smartphone[1]?></td>
			</tr>
			<tr>
				<td><?php echo $Smartphone[2]?></td>
			</tr>
			<tr>
				<td><?php echo $Smartphone[3]?></td>
			</tr>
		</table>
	</body>
</html>