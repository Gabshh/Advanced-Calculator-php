<?php
    /*****************************************************
     * Objetivo: Apresentar e calcular uma tabuada simples
      de escolha do usuário
     * Desenvolvedor: Gabriel Gomes
     * Data: 10/02/2022
     * Versão:2.0 
    *****************************************************/

    //Import do arquivo de configurações de variáveis e constantes
	require_once("../Calculadora/modulo/config.php");
    //Import do arquivo de funções para calculos matemáticos
	require_once("../Calculadora/modulo/calculos.php");

    //Declaração de variáveis 
    $valor1 = (double) 0;
    $valor2 = (double) 0;
    
    $produto = (double) null;
    $resultado = (string) null;

    //Verificar se o botão foi clicado
    if(isset($_POST['buttonCalcular'])) {

        //Recebendo os dados do formulário
        $valor1 = $_POST['txtn1'];
        $valor2 = $_POST['txtn2'];

        //Validação de tratamento de erro para caixa vazia
        if($_POST['txtn1'] == "" || $_POST['txtn2'] == "") {
		echo(ERRO_MSG_CAIXA_VAZIA);
        }else{
            //Validaão para tratamento de erro para dados incorretos
            if (!is_numeric($valor1) || !is_numeric($valor2)){
                echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
            } else {
                //Validação para tratamento da tabuada do 0 (inexistente)
                if ($valor1 == 0) {
                    echo(ERRO_TABUADA_ZERO);
                } else {
                    //Criando loop e chamada para a funçao que vai realizar os calculos matematicos
                    for($contador = 0; $contador <= $valor2; $contador++) {
                    $produto = operacaoMatematica($valor1, $contador, "MULTIPLICAR");
                    $resultado.= ($valor1. ' x '. $contador. ' = '. $produto. '<br/>');
                    }
                }
            }
        }
    }
    

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="../css/synthwave.css">
        <title>Tabuada</title>
    </head>
    <body>
        <div id="conteudo">
            <div id="titulo">
                ⠀⠀⠀⠀⠀⠀Tabuada⠀⠀⠀⠀⠀⠀ ⠀
            </div>

            <div id="form">
                <form name="formTabuada" method="post" action="tabuada.php">
                    Tabuada: <input type="text" name="txtn1" value="<?=$valor1?>"> <br>
                    Contador:<input type="text" name="txtn2" value="<?=$valor2?>">

                    <div id="container-button">
                            <input type="submit" name="buttonCalcular" value="Calcular">
                    </div>

                    <div id="resultado">
                        <?=$resultado?>
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
            <li><a href="../Home/index.html">Home</a></li>
            <li><a href="../Calculadora/calculadora_simples.php">Calculadora</a></li>
            <li><a href="../Média/media.php">Média</a></li>
            <li><a href="../Par-Impar/impar-par.php">Pares e Ímpares</a></li>
            <li><a href="#">Tabuada</a></li>
        </ul>

    </div>
    <div class="menu-burger" id="menu-burger"></div>
        
    <div class="overlay"></div>
    <div class="overlay glitch"></div>

    <script src="../js/script.js"></script>
    </body>
</html>