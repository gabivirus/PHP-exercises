<html>
<head>
	<title>Pares</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Pares de 2 a 50</h2>
		<form method="post">
			<input type="submit" value="Imprimir">
			<br>
		</form>

		<?php

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			echo '<h3>';
			for( $c = 1; $c <= 50; $c++)
			{
				if($c % 2 == 0){ echo $c, '&nbsp';}
			
			}
			echo '</h3>';
		}
		?>
	</kbd>
</body>
</html>