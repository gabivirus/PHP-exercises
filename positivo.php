<html>
<head>
	<title>Scanner</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Detecção de valores</h2>
		<form method="post">
			<label for="number">Clique</label>
			<input type="submit" name="btn" value="Imprimir">
			<br><br>
		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		for($c=1; $c<101; $c++){echo '<h4>', $c, '. PHP';}
		
	}
	?>
	<button><a href="index.php">Sair</a></button>
</kbd>
</body>
</html>