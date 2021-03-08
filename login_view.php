<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
</head>
<body>

<form action="login.php" method="post">
	<table>
		<tr>
			<th>Login</th>
			<td><input id="id_login" type="text" name="login" /></td>
		</tr>
		<tr>
			<th>Hasło</th>
			<td><input id="id_pass" type="password" name="pass" /></td>
		</tr>
		<tr>
			<th>Wyślij</th>
			<td><input type="submit" value="Zaloguj" /></td>
		</tr>
	</table>
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
</body>
</html>