<form action="" method="POST">
		<label>Nama: 1</label>
		<input type="text" name="nama1"><br>
		<label>Nama: 2</label>
		<input type="text" name="nama2"><br>
		<label>Nama: 3</label>
		<input type="text" name="nama3"><br>
		<button type="submit" name="urutkan">urutkan</button>
</form>

<?php
	$nama1 = NULL;
	$nama2 = NULL;
	$nama3 = NULL;
	
	if(isset($_POST["urutkan"])){
		$nama1 = $_POST["nama1"];
		$nama2 = $_POST["nama2"];
		$nama3 = $_POST["nama3"];
		//1>2>3
		if($nama1 < $nama2 && $nama2 < $nama3){
			echo "$nama1 <br> $nama2 <br> $nama3";
		}
		//1>3>2
		else if($nama1 < $nama2 && $nama2 > $nama3 && $nama1 < $nama3){
			echo "$nama1 <br> $nama3 <br> $nama2";
		}
		//2>1>3
		else if($nama1 > $nama2 && $nama2 < $nama3 && $nama1 < $nama3){
			echo "$nama2 <br> $nama1 <br> $nama3";
		}
		//2>3>1
		else if($nama1 > $nama2 && $nama2 < $nama3 && $nama1 > $nama3){
			echo "$nama2 <br> $nama3 <br> $nama1";
		}
		//3>1>2
		else if($nama1 < $nama2 && $nama2 > $nama3 && $nama1 > $nama3){
			echo "$nama3 <br> $nama1 <br> $nama2";
		}
		//3>2>1
		else {
			echo "$nama3 <br> $nama2 <br> $nama1";
		}
	}
?>