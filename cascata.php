<html>
<head>
	<title>Cascata</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>1 a 20</h2>
		<form method="post">
			<input type="submit" name="row" value="Para baixo">
			<br>
		</form>
		<form method="get">
			<input type="submit" name="colunm" value="Para o lado">
			<br>
		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		for( $c = 1; $c <= 20; $c++){ echo '<p>', $c, '</p>'; }
	}
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		
		for( $c = 1; $c <= 20; $c++){ echo $c, '&nbsp&nbsp'; }
	}

	?>
	<button><a href="index.php">Sair</a></button>
</kbd>
</body>
</html>