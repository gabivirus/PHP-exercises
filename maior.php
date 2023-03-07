<html>
<head>
	<title>PAr ou ímpar</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Par ou ímpar</h2>
		<form method="post">
			<label for="na">Número A</label>
			<input type="text" name="na"><br><br>
			<label for="nb">Número B</label>
			<input type="text" name="nb">
			<input type="submit" name="btn" value="Imprimir">
			<br><br>
		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$na = $_POST['na'];
		$nb = $_POST['nb'];

		if($na > $nb){ echo 'A é maior'; }
		elseif($nb > $na){ echo 'B é maior'; }
		else { echo 'Os números são iguais'; }
	}
	?>
</kbd>
</body>
</html>