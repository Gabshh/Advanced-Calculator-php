<?php
    //Declaração de variáveis 
    //nomeVar = (tipoDados) valorInicial
    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
    $nota4 = (double) 0;
    $media = (double) 0;

    //Validação para tratar se o botão foi clicado
    if(isset($_POST["btncalc"])){
        
        //Recebendo dados utilizando o POST do formulário
        $nota1 = $_POST['txtn1'];
        $nota2 = $_POST['txtn2'];
        $nota3 = $_POST['txtn3'];
        $nota4 = $_POST['txtn4'];

        /* Operadores Lógicos
            E - (and, &&)
            OU - (or, ||)
            NAO  - (!)

            is_numeric() - validação para numeros
            is_interger() - validação para numeros interos
            is_float() - validação para numeros reais
            is_double() - validação para numeros reais
            is_array() - validação para vetores e matrizes
            is_object() - validação para objetos
            is_bool() - validação para valores booleanos
            is_string() - validação para strings

        
        */
        //Validação para tratamento de caixa vazia
        if($_POST['txtn1'] == "" || $_POST['txtn2'] == "" 
        || $_POST['txtn3'] == "" || $_POST['txtn4'] == "" ){

            echo('<p class="msgErro">Preencha todos os campos!</p>'); 

        } else if(!is_numeric($nota1) || !is_numeric($nota2) 
            || !is_numeric($nota3) || !is_numeric($nota4)) {

                echo('<p class="msgErro">Para realizar o cálculo, todos os dados devem ser números válidos</p>');
                
        } else {
                //Realizando o cálculo da média
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        }
            
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="number" name="txtn1" value="<?=$nota1?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="number" name="txtn2" value="<?=$nota2?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="number" name="txtn3" value="<?=$nota3?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="number" name="txtn4" value="<?=$nota4?>" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?=$media?>
            </footer>
        </div>
        
		
	</body>

</html>