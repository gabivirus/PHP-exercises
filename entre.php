<html>
<head>
	<title>Pares</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Pares de 2 a 50</h2>
		<article>
			<form method="post">
				<label for="num1">num1:</label>
				<input type="text" name="num1">
				<br>

				<label for="num2">num2:</label>
				<input type="text" name="num2">
				<br>

				<input type="submit" value="Imprimir">
				<br>
			</form>
			
			<?php

			if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				echo '<h3>';
				for( $c = $_POST['num1']+1; $c < $_POST['num2']; $c++)
				{
					echo $c, '&nbsp';
					
				}
				echo '</h3>';
			}
			?>
		</article>
	<button><a href="index.php">Sair</a></button>
	</kbd>
</body>
</html>