<html>
<head>
	<title>PAr ou ímpar</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Par ou ímpar</h2>
		<form method="post">
			<label for="ang1">1° ângulo</label>
			<input type="text" name="ang1">
			<br>

			<label for="ang2">2° ângulo</label>
			<input type="text" name="ang2">
			<br>

			<label for="ang3">3° ângulo</label>
			<input type="text" name="ang3">
			<br><br>

			<input type="submit" name="btn" value="Imprimir">
			<br>
		</form>

		<?php

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$ang1 = $_POST['ang1'];
			$ang2 = $_POST['ang2'];
			$ang3 = $_POST['ang3'];

			if(($ang1 > $ang2 + $ang3) || ($ang2 > $ang1 + $ang3) || ($ang3 > $ang2 + $ang1))
				{ echo 'Não foi possível formar um triângulo'; }

			elseif (($ang1 == $ang2) && ($ang1 == $ang3)) {echo'Equilatero';}

			elseif (($ang1 == $ang2) || ($ang1 == $ang3) || ($ang2 == $ang3)) {echo'Isósceles';}

			else {echo'Escaleno';}
		}
		?>
		<button><a href="index.php">Sair</a></button>
	</kbd>
<body>
</html>