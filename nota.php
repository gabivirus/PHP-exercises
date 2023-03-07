<html>
<head>
	<title>Notas</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Notas</h2>
		<form method="post">
			<label for="nota">Informe uma nota:</label>
			<input type="text" name="nota">
			<br>

			<input type="submit" value="Analisar">
			<br><br><br>

		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$nota = intval($_POST['nota']);

		if ($nota >= 0 && $nota <= 5) { echo 'Credo'; }
		else if ($nota >= 6 && $nota <= 10) { echo 'Parabéns'; }
		else{ echo $nota, ' é uma nota invalida, digite novamente.'; }
		
	}
	?>
	<button><a href="index.php">Sair</a></button>
</kbd>
</body>
</html>