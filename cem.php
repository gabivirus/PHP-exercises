<html>
<head>
	<title>100</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>100 vezes PHP</h2>
		<form method="post">
			<label for="btn">Clique</label>
			<input type="submit" name="btn" value="Imprimir">
			<br><br>
		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		for($c=1; $c<101; $c++){echo '<h4>', $c, '. PHP';}
		
	}
	?>
</kbd>
</body>
</html>