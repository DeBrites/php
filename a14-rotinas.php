<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function soma ($a, $b) { //rotinas funcionam com funções onde você pode chamar a qualquer momento
            $s = $a + $b;
            echo "<p>A soma vale $s.</p>";
        }
        soma (3, 4); //aqui voce chama a função soma que produz um parágrafo
        function som ($c, $d) {
            $v = $c + $d;
            return $v; //aqui a função dá $v como resposta ao chamado
        }
        $r = som (5, 6); //$v só está declarada dentro da função, então é preciso chamar ela e passar para $r
        echo "<p>A soma dá $r.</p>";
        function so ($e, $f) {
            return $e + $f; //ele pode retornar direto a soma
        }
        $x = 5; //a variável x e y dão os respectivos números
        $y = 10;
        $u = so ($x, $y);
        echo "<p>A soma de $x e $y é $u.</p>";

        function s() { //função s recebendo valor nenhum, nao vai dar erro
            $p = func_get_args();// essa função pega todos os argumentos e poe dentro de um vetor, no caso vetor p com seus respectivos indices
            $t = func_num_args(); //essa função retorna o numero de argumentos que foram passados pelo vetor
            $w = 0;
            for ($i=0; $i<$t; $i++) {
                $w += $p[$i]; // aqui se soma todos os indices do vetor p
            }
            return $w; //aqui ele retorna a soma
        }
        $z = s(4,5,6, 10, 25); //exemplo de soma
        echo "A soma dos valores são $z";
    ?>
</body>
</html>