<?php
	//include ou require permite fazer a importação de arquivos no PHP
	/*Utilizando a opção com _once, o servidor realiza uma restrição para importar somente
	uma vez o arquivo (melhor opção).*/

	//include()
	//include_once()

	//require()
	//require_once()

	//Import do arquivo de configurações de variáveis e constantes
	require_once("../../modulo/config.php");

	//Import do arquivo de funções para calculos matemáticos
	require_once("../../modulo/calculos.php");

	//Declaração de variáveis
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$resultado = (double) 0;
	$opcao = (string) null;

	/*
		gettype() - permite verificar qual o tipo de dados de uma variavel
		settype() - permite modificar o tipo de dados de uma variavel
	
		Exemplo de uma variavel que nasce do tipo inteiro e depois é convertida pra string
	
		$nome = 10;
		echo(gettype($valor1));

		settype($nome, 'string');

		echo(gettype($nome));

		strtoupper() - permite converter texto para maiusculo
		strtolower() - permite converter texto para minusculo	
	
	*/ 

	//Validação para verificar se o botão foi clicado
if(isset($_POST['btncalc'])) {

	//Recebe os dados do formulário
	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	//Validação de tratamento de erro para caixa vazia
	if($_POST['txtn1'] == "" || $_POST['txtn2'] == "") {
		echo(ERRO_MSG_CAIXA_VAZIA);
	}else{

		//Validação de tratamento de erro para radio sem escolha
		if(!isset($_POST['rdocalc']))
			echo(ERRO_MSG_OPERACAO_CALCULO);
		else{

			//Validaão para tratamento de erro para dados incorretos
			if (!is_numeric($valor1) || !is_numeric($valor2)){
				echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
			} else {

				//Apenas podemos receber o valor do radio quando ele existir!!!
				$opcao = strtoupper($_POST['rdocalc']);

				//Chamada para a funçao que vai realizar os calculos matematicos
				$resultado = operacaoMatematica($valor1, $valor2, $opcao);

			}

				/*Processamento do calculo das operações
				if($opcao == "SOMAR")
					$resultado = $valor1 + $valor2;
				elseif ($opcao == "SUBTRAIR")
					$resultado = $valor1 - $valor2;
				elseif ($opcao == "MULTIPLICAR")
					$resultado = $valor1 * $valor2;
				elseif ($opcao == "DIVIDIR") {
				
					// Validação para tratamento de erro da divisão por 0
					if($valor2 == 0)
					echo('<script> alert("Não é possível realizar uma divisão onde o valor 2 é igual a 0"); </script>');
					else
						$resultado = $valor1 / $valor2;
				}

				//round() - permite limitar a quantidade de casas decimais de um valor, 
				//além de arredondar o valor quando necssário 
				//$resultado = number_format($resultado, 3);
				*/
				
		}
	}
}

?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" href="../../css/menu.css">
		<link rel="stylesheet" href="./css/stylesCalculadora.css">
		<link rel="stylesheet" href="../../css/synthwave.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="calculadora_simples.php">
						Valor 1:<input type="text" name="txtn1" value=<?=$valor1?>> <br>
						Valor 2:<input type="text" name="txtn2" value=<?=$valor2?>> <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" <?=$opcao == 'SOMAR'?'checked':null;?> >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" <?=$opcao == 'SUBTRAIR'?'checked':null;?> >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" <?=$opcao == 'MULTIPLICAR'?'checked':null;?> >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" <?=$opcao == 'DIVIDIR'?'checked':null;?> >Dividir <br>
							
							<input id="Calcular" type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						<?=$resultado;?>
						</div>
						
					</form>
            </div>
           
        </div>

		<div id="menu-bar">
        <div id="menu" onclick="menuOnClick()">
            <div id="barra1" class="barra"></div>
            <div id="barra2" class="barra"></div>
            <div id="barra3" class="barra"></div>

        </div>
        <ul class="nav" id="nav">
            <li><a href="../../Home/index.html">Home</a></li>
            <li><a href="#">Calculadora</a></li>
            <li><a href="../Média/media.php">Média</a></li>
            <li><a href="../Par-Impar/impar-par.php">Pares e Ímpares</a></li>
            <li><a href="../Tabuada/tabuada.php">Tabuada</a></li>
        </ul>

    </div>
    <div class="menu-burger" id="menu-burger"></div>
        
    <div class="overlay"></div>
    <div class="overlay glitch"></div>

    <script src="../../js/script.js"></script>
		
	</body>

</html>

