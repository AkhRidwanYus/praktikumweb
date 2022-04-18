<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST">
			<input type="text" name="text" >
			<button type="submit" name="submit">Cetak</button>
		</form>
		<?php
			$text = NULL;
			if(isset($_POST["submit"])){
				if(!empty($_POST["text"])){
					$text = str_split(strtolower($_POST["text"]));
					$i = strlen($_POST["text"]);
					echo "<h1>Input:</h1>";
					echo $_POST["text"];
					echo "<h1>Output:</h1>";
				}
				foreach($text as $chara){
					$j = 1;
					while($j <= $i){
						if($j == 1){
							$charup = strtoupper($chara);
							echo "$charup";
						}
						else{echo "$chara";}
						$j ++;
					}
				}
			}
		?>
	</body>