<html>
<head>
	<title>Notas</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
	<?php
		$html = '
			<h2>Notas</h2>
			<form method="post">
				<div id="frm" ><label for="nota">Informe uma nota:</label></div>
				<div id="frm" ><input type="text" name="nota"></div>
				<br>

				<input type="submit" value="Analisar">
				<br><br><br>
			</form>'
	?>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$nota = intval($_POST['nota']);

		if ($nota >= 0 && $nota <= 5) 
		{
			echo 'Credo';
			$hmtl = preg_replace('#<div id="frm">(.*?)</div>#', '', $html);
		}
		else if ($nota >= 6 && $nota <= 10) 
		{
			echo 'Parabéns'; 
			$hmtl = (preg_replace('#<div id="frm">(.*?)</div>#', '', $html));
		}
		else{ echo "$nota, é uma nota invalida, digite novamente."; }
		
	}
	?>
	<button><a href="index.php">Sair</a></button>
</kbd>
</body>
</html>