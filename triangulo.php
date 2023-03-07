<html>
<head>
	<title>PAr ou ímpar</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Par ou ímpar</h2>
		<form method="post">
			<label for="number">Clique</label>
			<input type="text" name="number">
			<input type="submit" name="btn" value="Imprimir">
			<br><br>
		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$number = $_POST['number'];

		if($number % 2 == 0){ echo 'Par'; }
		else { echo 'Ímpar'; }
	}
	?>
</kbd>
</body>
</html>