<?php
    /*****************************************************
     * Objetivo: Identificar os números impares e pares 
     * entre os valores que o usúario escolher
     * Desenvolvedor: Gabriel Gomes
     * Data: 11/02/2022
     * Versão: 2.0 
    *****************************************************/

    require_once("../../modulo/calculos.php");
    require_once("../../modulo/config.php");

    //Declaração de variáveis
    $valor1 = (int) 0;
    $valor2 = (int) 0;
    $resultadoImpar = (string) null;
    $resultadoPar = (string) null;
    $quantidadeImpar = (int) 0;
    $quantidadePar = (int) 0;
    $opcoesValor1 = (int) 0;
    $opcoesValor2 = (int) 0;

    //Verificar se o botão foi clicado
    if (isset($_POST['buttonCalcular'])) {
        //Recebendo os dados do formulário
        $valor1 = $_POST['txtn1'];
        $valor2 = $_POST['txtn2'];

        if ($valor1 == "" || $valor2 == ""){
            echo(ERRO_MSG_CAIXA_VAZIA);
        } elseif ($valor1 > $valor2){
            echo(ERRO_NUMERO_INCALCULAVEL);
        } elseif ($valor1 == $valor2){
            echo(ERRO_NUMEROS_IGUAIS);
        }else{
            //Loop para 
            for($contador = $valor1; $contador <= $valor2; $contador++){
                if ($contador % 2 == 0){
                    $resultadoPar .= $contador. '<br/>';
                    $quantidadePar++;
                }else{
                    $resultadoImpar .= $contador. '<br/>';
                    $quantidadeImpar++;
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
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../../css/synthwave.css">
    <title>Pares e Impares</title>
</head>
<body>
<div id="conteudo">
            <div id="titulo">
                ⠀⠀⠀Pares e Ímpares⠀⠀ ⠀
            </div>

            <div id="form">
                <form name="formRepeticao" method="post" action="impar-par.php">
                    <span>n° inicial:</span> 
                        <select name="txtn1">
                            <option value="">Por favor selecione um número</option>
                            <?=gerarOptions(0, 500, $valor1)?>
                        </select> <br/>

                    <span>⠀n°  final:</span> 
                    <select name="txtn2">
                            <option value="">Por favor selecione um número</option>
                            <?=gerarOptions(100, 1000, $valor2)?>
                        </select>

                    <div id="container-button">
                        <input type="submit" name="buttonCalcular" value="Calcular">
                        <div id="buttonReset">
                            <a href="impar-par.php">
                                <button>Limpar</button>
                            </a>    
                        </div>
                    </div>

                <div id="divisao-resultados">
                    <div id="secao-impar">Ímpares</div>
                    <div id="secao-par">Pares</div>
                </div>

                <div id="resultados">
                    <div id="resultado-impar"><?=$resultadoImpar?></div>
                    <div id="resultado-par"><?=$resultadoPar?></div>
                </div>

                <div id="quantidades">
                    <div id="quantidadeImpar">Total de impares:<br/> <?=$quantidadeImpar?></div>
                    <div id="quantidadePar">Total de pares:<br/> <?=$quantidadePar?></div>
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
            <li><a href="../Calculadora/calculadora_simples.php">Calculadora</a></li>
            <li><a href="../Média/media.php">Média</a></li>
            <li><a href="#">Pares e Ímpares</a></li>
            <li><a href="../Tabuada/tabuada.php">Tabuada</a></li>
        </ul>

    </div>
    <div class="menu-burger" id="menu-burger"></div>
        
    <div class="overlay"></div>
    <div class="overlay glitch"></div>

    <script src="../../js/script.js"></script>
    
</body>
</html>