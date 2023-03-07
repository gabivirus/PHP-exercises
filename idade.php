<html>
<head>
	<title>Maior de idade</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Maior de idade</h2>
		<form action="" method="post">
			<label for="nome">Nome:</label>
			<input type="text" name="nome">
			<br>

			<label for="idade">Idade:</label>
			<input type="text" name="idade">
			<br>

			<input type="submit" value="Analisar">
			<br><br><br>

		</form>

	<?php

	$result='';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$name = $_POST['nome'];
		$age = intval($_POST['idade']);
		
		function agefy($idade)
		{
			if ($idade >= 18) { return 'maior de 18.';}
			else { return 'menor de 18.';}
		}
		
		echo "$name tem $age anos. É ", agefy($age);
	}
	?>
	<button><a href="index.php">Sair</a></button>
</kbd>
</body>
</html>