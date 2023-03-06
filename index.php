<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<style>
		body{
			background-color: #fbfbfb;
			padding: 3%;
		}

		kbd{
			display: flex;
			flex-wrap: wrap;
			flex-grow: 3;
			justify-content: space-around;
			column-gap: 2rem;
			row-gap: 2rem;
			align-items: flex-start;
			flex-direction: row;
		}

		a{
			position: relative;
			text-decoration: none;
			color: #303030;
		}

		article{
			min-height: 400;
			min-width: 250px;
			padding: 20px;
			background-color: #fff;

			align-items: center;
			
			border-radius: 10px;
			border: 1px solid #989898;
			box-shadow: 10px 10px 10px 0px #cbcbcb;
			
			transition: all .5s cubic-bezier(0.68, -0.55, 0.27, 1.55);;
		}

		article:hover{
			transform: scale(1.1);
		}

	</style>
</head>
<body>
	<kbd>
		<?php
			
			echo "<a href='idade.php'>";
				echo '<article>';
					echo "<h3>1) Maior de idade</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Crie um programa PHP que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='mes.php'>";
				echo '<article>';
					echo "<h3>2) Mêses</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número. ';
					echo '</p>';
				echo '</article>';
				echo "</a>";

			echo "<a href='nota.php'>";
				echo '<article>';
					echo "<h3>3) Notas</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que peça uma nota, entre zero e dez. Mostre uma mensagem caso o valor seja inválido e continue pedindo até que o usuário informe um valor válido. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='cascata.php'>";
				echo '<article>';
					echo "<h3>4) Números de 1 à 20</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que imprima na tela os números de 1 a 20, um abaixo do outro. Depois modifique o programa para que ele mostre os números um ao lado do outro. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='pares.php'>";
				echo '<article>';
					echo "<h3>5) Pares de 1 a 50</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que imprima na tela apenas os números ímpares entre 1 e 50. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='entre.php'>";
				echo '<article>';
					echo "<h3>6) Números entre</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que receba dois números inteiros e gere os números inteiros que estão no intervalo compreendido por eles. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='cem.php'>";
				echo '<article>';
					echo "<h3>7) 100 vezes PHP</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que mostre 100 vezes o nome PHP, um debaixo do outro ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='sorteio.php'>";
				echo '<article>';
					echo "<h3>8) Acerte o número</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa PHP que em o usuário tenta adivinhar o número sorteado pelo computador entre 1 e 50 ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='positivo.php'>";
				echo '<article>';
					echo "<h3>9) Detecção de valores</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". ';
					echo '</p>';
				echo '</article>';
			echo "</a>";
			
			echo "<a href='parimpar.php'>";
				echo '<article>';
					echo "<h3>10) Par ou ímpar</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='maior.php'>";
				echo '<article>';
					echo "<h3>11) Maior ou menor</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='triangulo.php'>";
				echo '<article>';
					echo "<h3>12) Triangulos</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Desenvolva um algoritmo em PHP que se 3 números informados pelo usuário foram um triangulo, e se formarem um triangulo apresente uma imagem referente ao tipo deste triangulo: isósceles, escaleno ou equilátero. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='jokenpo.php'>";
				echo '<article>';
					echo "<h3>13) Jokenô</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Desenvolva uma aplicação em PHP que represente o jogo Jokenpô (Pedra, Papel e Tesoura), onde o usuário informa seu nome e indica em qual opção quer apostar (pedra, papel ou tesoura) e aguarda a jogada do computador (ela deverá ser automática), de acordo com as regras do Jokenpô exiba quem ganhou e as imagens referentes as escolhas do computador e o usuário. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";
		?>
	</kbd>
</body>
</html>

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