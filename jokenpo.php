<html>
<head>
	<title>Jokenpô</title>
	<meta charset="utf-8">
</head>
<body>
	<kbd>
		<h2>✊ Pedra, 🤚 papel, ✌ tesoura</h2>
		<form method="post">
            <h3> [1] ✊ <br> [2] 🤚 <br> [3] ✌ </h3>
            <input type="text" name="number">
            <input type="submit" value="Jogar">
        </form>
        </kbd>

	<?php
        function jokenpo($player, $pc){
            if($player == 'Pedra'){
                echo '<h3>Você: ✊<br>';
                if($player == $pc){ echo 'Adversário ✊<br> Causando um empate';}
                elseif($pc == 'Tesoura'){ echo 'Adversário: ✌<br> Causando uma Vitória';}
                else{ echo 'Adversário: 🤚<br> Causando uma Derrota</h3>';}
            }
            if($player == 'Papel'){
                echo '<h3>Você: 🤚<br>';
                if($player == $pc){ echo 'Adversário: 🤚<br> Causando um empate';}
                elseif($pc == 'Pedra'){ echo 'Adversário: ✊<br> Causando uma Vitória';}
                else{ echo 'Adversário: ✌<br> Causando uma Derrota</h3>';}
            }
            if($player == 'Tesoura'){
                echo '<h3>Você: ✌<br>';
                if($player == $pc){ echo 'Adversário: ✌<br>Causando um empate';}
                elseif($pc == 'Papel'){ echo 'Adversário: 🤚<br> Causando uma Vitória';}
                else{ echo 'Adversário: ✊<br> Causando uma Derrota</h3>';}
            }
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
            $itens = array('Pedra', 'Papel', 'Tesoura');
            $index = $_POST['number']-1;
            $Jogador = $itens[$index];
            $computador = $itens[random_int(0, 2)];
            
            jokenpo($Jogador, $computador);
        }
	?>
    <br/>
	<button><a href="index.php">Sair</a></button>
</body>
</html>