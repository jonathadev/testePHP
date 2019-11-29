<?php
include ("header.php");
?>

<body>
	<h1>
	<!-- 	<?php
		$var =  "Olá mundo!";
		echo ($var);
		?>
	-->

	Sistema de pontuação

	<?php
// $texto = "00513|01_BRANCO|3_4|8";
// $QtdTxt = substr_count($texto,'|');
// echo $QtdTxt;






	function calculaPontuacao($str) {
		$QtdTxtA = substr_count($str,'A');
		$QtdTxtB = substr_count($str,'B');
		$QtdTxtC = substr_count($str,'C');

		$valores[0] =  $QtdTxtA;
		$valores[1] =  $QtdTxtB;
		$valores[2] =  $QtdTxtC;

		echo $resultado = 'RESULTADO: ';

		echo '[', $valores[0],', ';
		echo $valores[1],', ';
		echo $valores[2], ']';

		return $str;

	}


//echo $QtdTxtA;
//echo $QtdTxtB;
//echo $QtdTxtC;


//echo $valores[0];
//echo $valores[1];
//echo $valores[2];
	?>

	<br><br>
	3 - Sistema de pontuação
	<br><br>
	Ana, Bruna e Caio estão jogando um jogo de tabuleiro. Os três decidiram criar um novo
	sistema de pontuação. A primeira inicial de um jogador ("A", "B" ou "C") indica que o jogador
	marcou um único ponto. Dada uma série de letras maiúsculas, retorne uma série de
	pontuações dos jogadores.
	Por exemplo, se ABBACCCCAC for escrito quando o jogo terminar, Ana marcou 3 pontos,
	Bruna marcou 2 pontos e Caio marcou 5 pontos, pois existem 3 ocorrências da letra A, 2
	ocorrências da letra B e 5 ocorrências da letra C. Portanto, a matriz [3, 2, 5] deve ser
	retornada.
	<br><br>
	Exemplos:
	calculaPontuacao("A") ➞ [1, 0, 0]<br><br>
	calculaPontuacao("ABC") ➞ [1, 1, 1]<br><br>
	calculaPontuacao("ABCBACC") ➞ [2, 2, 3]<br><br>

	<br><br>
	<form method="POST" action="">
		<label>Digite a serie de pontuação: </label>
		<input type="text" name="nome" placeholder="Digite aqui a serie de pontuacao"><br><br>
	</form>


</h1>

<?php

if(!empty($_POST))
{
	$texto = $_POST['nome'];

	     //Validaçao dos campos:
	$validacao = true;

	if(empty($nome))
	{
		$nomeErro = 'Por favor digite o seu a serie de puntuacao!';
		$validacao = false;
	}

	calculaPontuacao($texto);
}


?>

</body>



<?php
include("footer.php");
?>