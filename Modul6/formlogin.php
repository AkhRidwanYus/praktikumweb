<body>
	<?php
		include("model.php");
	?>
	<a href="index.php">Kembali</a>
    <form name="login" action="login.php" method="POST">
		<table>
			<tr><td colspan="2"><h1>Login Session</h1></td></tr>
			<tr>
				<td><label>ID Member	: </label></td>
				<td><input type="number" name="id" value="<?=isset($_POST['id']) ? $_POST['id'] : ''?>" required/></td>
			</tr>
			<tr>
				<td><label>Password	: </label></td>
				<td><input type="password" name="pass" required/></td>
			</tr>	
			<tr>
				<td><input name='login' type='submit' value='Login'></td>
			</tr>
		</table>
	</form>
</body>