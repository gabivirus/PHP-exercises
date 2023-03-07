<html>
<head>
	<title>100</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Acerte o número</h2>
		<form method="post">
			<label for="user">Guess</label>
			<input type="text" name="user">
			<input type="submit" name="btn" value="Sortear">
			<br><br>
		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$nums = range(1, 50);
		$user = $_POST['user'];
		$max = random_int(1, 50);
		if ($max == $user) { echo 'Parabéns'; }
		elseif (in_array($user, $nums) == false) { echo $user, 'não está entre 1 e 50. Tente novamente';}
		else { echo 'Você errou';}
		
	}
	?>
	<button><a href="index.php">Sair</a></button>
</kbd>
</body>
</html>