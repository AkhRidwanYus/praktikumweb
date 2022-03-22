<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
		table {border: 1px solid;}
		th {font-size: x-large;
			background-color: red;
			border: 1px solid;
			height: 75px;
		}
		td {border: 1px solid;
			front-weight:normal;
		}
		</style>
	</head>
	<body>
		<?php
			$Smartphone = ["a" => "Samsung Galaxy S22", "b" => "Samsung Galaxy S22+", "c" => "Samsung Galaxy A03", "d" => "Samsung Galaxy Xcover5"];
		?>
		<table>
			<tr>
				<th>Daftar Smartphone Samsung</th>
			</tr>
			<tr>
				<td><?php echo $Smartphone['a']?></td>
			</tr>
			<tr>
				<td><?php echo $Smartphone['b']?></td>
			</tr>
			<tr>
				<td><?php echo $Smartphone['c']?></td>
			</tr>
			<tr>
				<td><?php echo $Smartphone['d']?></td>
			</tr>
		</table>
	</body>
</html>