<html>
<head>
	<title>Mêses</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Maior de idade</h2>
		<form method="post">
			<label for="mes">Mêses do ano:</label>
			<input type="text" name="mes">
			<br>

			<input type="submit" value="Analisar">
			<br><br><br>

		</form>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$meses = array('Janeiro', 'Feveireiro', 'Março', 'Abril', 'Maior', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
		$mes = intval($_POST['mes']);

		if ($mes >= 1 && $mes <= 12) { echo 'O mês em questão é: ', $meses[$mes]; }
		else{ echo 'O número não condiz a um mês'; }
		
	}
	?>
</kbd>
</body>
</html>