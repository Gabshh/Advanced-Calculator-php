<?php

    /************************************************************************************
    * Objetivo: arquivo de funções matemáticas que poderá ser utilizado dentro do projeto
    * Desenvolvedor: Gabriel Gomes
    * Data: 04/02/2022
    * Versão: 1.0
    ************************************************************************************/

    // Criando uma função para calcular as operações matematicas 
    function operacaoMatematica ($numero1, $numero2, $operacao) {
        //Declaração de variáveis locais da função
        $num1 = (double) $numero1;
        $num2 = (double) $numero2;
        $result = (double) 0;
        $tipoCalculo = (string) $operacao;

        switch ($tipoCalculo) {

            case "SOMAR":
                $result = $num1 + $num2;
                break;
            case "SUBTRAIR":
                $result = $num1 - $num2;
                break;
            case "MULTIPLICAR":
                $result = $num1 * $num2;
                break;
            case "DIVIDIR":
                if($num2 == 0)
                    echo(ERRO_MSG_CAIXA_VAZIA);
                else
                    $result = $num1 / $num2;
                break;

                //Processamento caso não entre em nenhuma das opções
                //default:

        }

        $result = round($result, 2);

        return $result;
    }
?>