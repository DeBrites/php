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
        echo "<h1>ARRAY</h1>";
        $n = array(0 => 5, 1 => 54, 2 => 45, 3 => 6);
        foreach ($n as $i => $valor) {
            echo "Índice $i no valor $valor <br>";
        }
        print_r($n);
        echo "<h2>VAR_DUMP()</h2>";
        var_dump($n);//é parecido com o print_r() porém mostra cada elemento se é inteiro, string ou float e etc.
        echo "O vetor tem ". count($n)." elementos<br>";//count() conta os elementos do array
        print_r($n);
        echo "<h2>ARRAY_PUSH()</h2>";
        array_push($n, 7);//funciona como $n[] = 7; adicionando um elemento no final do vetor
        print_r($n);
        echo "<h2>ARRAY_POP()</h2>";
        array_pop($n);//ele retira o último elemento do vetor $n
        //array_pop($n) e array_push() são para tratamentos específicos de "pilha", pois pilha você retira e coloca elementos na sua conta no final, no ultimo elemento do vetor; esse mecanismo é conhecido academicamente como LIFO "last in first out"
        print_r($n);
        echo "<h2>ARRAY_UNSHIFT()</h2>";
        array_unshift($n, 7);//ele coloca elementos no início de vetor
        print_r($n);
        echo "<h2>ARRAY_SHIFT()</h2>";
        array_shift($n);//remove o primeiro elemento do vetor
        print_r($n);
        echo "<h2>SORT()</h2>";
        sort($n);//serve para organizar os elementos por ordem crescente, também funciona com string
        print_r($n);
        echo "<h2>RSORT()</h2>";
        rsort($n);//serve para organizar os elementos por ordem decrescente, também funciona com string
        print_r($n);
        echo "<h2>ASORT()</h2>";
        asort($n);//serve para organizar os elementos por ordem crescente mexendo os índices também
        //ele organizou em relação não a $n e sim a última função colocada nesse arquivo, rsort()
        print_r($n);
        echo "<h2>ARSORT()</h2>";
        arsort($n);//serve para organizar os elementos em ordem decrescente mexendo nos índices também
        print_r($n);
        //índices podem ser chamado de chave (key)
        echo "<h2>KSORT()</h2>";
        $n = array (2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
        print_r($n);
        ksort($n);//ele coloca os índices em ordem crescente carregando junto os elementos contidos nele
        print_r($n);
        echo "<h2>KRSORT()</h2>";
        $n = array (2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
        print_r($n);
        krsort($n);//ele coloca os índices em ordem decrescente carregando junto os elementos contidos nele
        print_r($n);  
    ?>
    </pre>
</body>
</html>