<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kalkulator kredytowy</title>
	</head>
	<body>
		<?php
			session_start();
			$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

			//sprawdzenie czy wymagane jest logowanie
			if ( empty($role) ){
				include 'login.php';
				exit();
			}
			include 'calc.php';
		?>
	</body>
</html>