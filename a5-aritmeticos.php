<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1 + $n2;
        echo "A soma de $n1 e $n2 é ". ($s);
        echo "<br/>Os valores recebidos são $n1 e $n2";
    ?> <!--concatenação é feita por ponto final e parenteses . e ()-->
    <!--Para usar a URL pra pegar informações você pode colocar valores personalizados colocando na url (?a=6&b=7) e na programação aqui se coloca ($n1 = $_GET["a"]) mas não é usual para o usuário-->
    <?php 
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>"; // Valores colocados na URL como (?a=7&b=8&x=2&y=-4)
        echo "O valor absoluto de $v2 é ". abs($v2); // O valor basoluto de matemática
        echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2); // potenciação utilizando duas variáveis
        echo "<br/>A raiz quadrada de $v1 é ". sqrt($v1);
        echo "<br/>O valor de $v2 arredondado é ". round($v2); // segue a regra de arrendondamento da matemática, parecido com o round, ceil() arredonda para cima e floor arredonda para baixo.
        echo "<br/>O valor de $v1 em moeda é  R$". number_format($v1,2,",",);
    ?>
</body>
</html>