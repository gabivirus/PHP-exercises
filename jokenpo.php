<html>
<head>
	<title>Jokenpô</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>Pedra papel ou tesoura</h2>
		<form method="post">
            <h4>| [0] Pedra | [1] Papel | [2] Tesoura |</h4>
            <input type="text" name="number">
            <input type="submit" value="Jogar">
        </form>
        </kbd>

	<?php
        function jokenpo($player, $pc){
            if($player == 'Pedra'){
                if($player == $pc){ echo '<h2>Empate</h2>';}
                elseif($pc == 'Tesoura'){ echo '<h2>Vitória</h2>';}
                else{ echo '<h2>Derrota</h2>';}
            }
            if($player == 'Papel'){
                if($player == $pc){ echo '<h2>Empate</h2>';}
                elseif($pc == 'Pedra'){ echo '<h2>Vitória</h2>';}
                else{ echo '<h2>Derrota</h2>';}
            }
            if($player == 'Tesoura'){
                if($player == $pc){ echo '<h2>Empate</h2>';}
                elseif($pc == 'Papel'){ echo '<h2>Vitória</h2>';}
                else{ echo '<h2>Derrota</h2>';}
            }
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
            $itens = array('Pedra', 'Papel', 'Tesoura');
            $index = $_POST['number'];
            $Jogador = $itens[$index];
            $computador = $itens[random_int(0, 2)];
            
            jokenpo($Jogador, $computador);
        }
	?>
	<button><a href="index.php">Sair</a></button>
</body>
</html>