<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<script>
		function map(val, minA, maxA, minB, maxB) {
    return minB + ((val - minA) * (maxB - minB)) / (maxA - minA);
  }
  
  function Card3D(card, ev) {
    let img = card.querySelector('img');
    let imgRect = card.getBoundingClientRect();
    let width = imgRect.width;
    let height = imgRect.height;
    let mouseX = ev.offsetX;
    let mouseY = ev.offsetY;
    let rotateY = map(mouseX, 0, 180, -25, 25);
    let rotateX = map(mouseY, 0, 250, 25, -25);
    let brightness = map(mouseY, 0, 250, 1.5, 0.5);
    
    img.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    img.style.filter = `brightness(${brightness})`;
  }
  
  var cards = document.querySelectorAll('.card3d');
  
  cards.forEach((card) => {
    card.addEventListener('mousemove', (ev) => {
      Card3D(card, ev);
    });
    
    card.addEventListener('mouseleave', (ev) => {
      let img = card.querySelector('img');
      
      img.style.transform = 'rotateX(0deg) rotateY(0deg)';
      img.style.filter = 'brightness(1)';
    });
  });
	</script>
</head>
<body>
	<kbd>
		<?php
			
			echo "<a href='idade.php'>";
				echo '<article class="card3d">';
					echo "<h3>1) Maior de idade</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Crie um programa PHP que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='mes.php'>";
				echo '<article class="card3d">';
					echo "<h3>2) Mêses</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número. ';
					echo '</p>';
				echo '</article>';
				echo "</a>";

			echo "<a href='nota.php'>";
				echo '<article class="card3d">';
					echo "<h3>3) Notas</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que peça uma nota, entre zero e dez. Mostre uma mensagem caso o valor seja inválido e continue pedindo até que o usuário informe um valor válido. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='cascata.php'>";
				echo '<article class="card3d">';
					echo "<h3>4) Números de 1 à 20</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que imprima na tela os números de 1 a 20, um abaixo do outro. Depois modifique o programa para que ele mostre os números um ao lado do outro. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='pares.php'>";
				echo '<article class="card3d">';
					echo "<h3>5) Pares de 1 a 50</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que imprima na tela apenas os números ímpares entre 1 e 50. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='entre.php'>";
				echo '<article class="card3d">';
					echo "<h3>6) Números entre</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que receba dois números inteiros e gere os números inteiros que estão no intervalo compreendido por eles. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='cem.php'>";
				echo '<article class="card3d">';
					echo "<h3>7) 100 vezes PHP</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa que mostre 100 vezes o nome PHP, um debaixo do outro ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='sorteio.php'>";
				echo '<article class="card3d">';
					echo "<h3>8) Acerte o número</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um programa PHP que em o usuário tenta adivinhar o número sorteado pelo computador entre 1 e 50 ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='positivo.php'>";
				echo '<article class="card3d">';
					echo "<h3>9) Detecção de valores</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". ';
					echo '</p>';
				echo '</article>';
			echo "</a>";
			
			echo "<a href='parimpar.php'>";
				echo '<article class="card3d">';
					echo "<h3>10) Par ou ímpar</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='maior.php'>";
				echo '<article class="card3d">';
					echo "<h3>11) Maior ou menor</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='triangulo.php'>";
				echo '<article class="card3d">';
					echo "<h3>12) Triangulos</h3>";
					echo '<hr/>';
					echo '<p>';
						echo 'Desenvolva um algoritmo em PHP que se 3 números informados pelo usuário foram um triangulo, e se formarem um triangulo apresente uma imagem referente ao tipo deste triangulo: isósceles, escaleno ou equilátero. ';
					echo '</p>';
				echo '</article>';
			echo "</a>";

			echo "<a href='jokenpo.php'>";
				echo '<article class="card3d">';
					echo "<h3>13) Jokenpô</h3>";
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