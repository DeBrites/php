<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes</title>
</head>
<body>
    <pre>
        <?php
            //pre muda a estrutura do array a ser exibido na página 
            //vetores no php são dinâmicos pois não precisa declarar quanto de memória irá usar, se utilizar 3 índices, ele guardará esses 3, se usar mais de 3 índices, ele alocará mais memória automaticamente
            $n[0]=3;
            $n[1]=5;
            $n[2]=8;
            $n[3]=2;
            $n[]=7;//ele adicionará um último índice quando indicado [] e colocará o número 7
            $u = array(3, 5, 8, 2, 7);//essa maneira pode representar o vetor $n
            print_r($u);
            $n[]=9;
            print_r($n);// o $n aparecerá o array terminando com 9
            $c=range(5,20,2);// range cria um array que começa de 5 e vai até 20 pulando de 2 em 2 até chegar a 20
            print_r($c);
            foreach($c as $d) {//ele pega cada valor do array e organiza como voce desejar
                echo "$d ";
            }
            echo "<br>";
            $t = array(9 => 5, 8 => 9, 2=> 8, 10 => 7);//é possível criar array personalizado utilizando a atribuição => associando cada índice ao seu valor
            print_r($t);
            unset($t[8]);//assim é removido o índice 8
            print_r($t);
            //no php as variaveis compostas nao são homogeneas e pode mesclar recebendo numero inteiro e string ou float
            $y = array("nome" => "Ana", "idade" => 23, "peso" => 78.5);//exemplo utilizando variáveis compostas não homogêneas
            $y["fuma"] = true;
            print_r($y);
            foreach($y as $k => $j) {
                echo "O campo $k possui o conteúdo $j<br>";
            }
            //matrizes não existem em PHP e sim vetores dentro de vetores
            $o = array(array(2,3), array(3,4), array(9,5));//exemplo dwe matriz com vetores
            print_r($o);
            $o[2][1] = $o[1][1];//um vetor pega o valor de outro como a matriz 2x1 pegando o valor da matriz 1x1
            print_r($o);//vai mudar o vetor 2,1 o número 5 vai virar 4 do vetor 1,1
        ?>
    </pre>
</body>
</html>