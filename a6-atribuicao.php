<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Atribuição</title>
</head>
<body>
    <h2>Operadores de Atribuição</h2>
    <?php 
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2, ","). ". <br/>";
        $preco += $preco*0.1; //contatenado com +
        echo "Com o ajuste de 10% o preço será de R$ ". number_format($preco, 2, ","). ".<br/>"; //valor com decimais em vírgula
        $preco -= $preco*0.1; //contatenado com -
        echo "Com o valor ajustado, ele é descontado em 10%, dá no total R$ ". number_format($preco, 2, ","); // pelo visto o valor $preco é alterado pelo ajuste
    ?>
    <h2>Incremento e Decremento</h2>    
    <?php 
        $atual = $_GET["aa"]/*GET tem que estar em maiúsculo*/;
        echo "O ano atual é $atual e o ano anterior foi ". --$atual. " e o ano posterior será ". ++$atual; // usando pré decremento com -- no inicio da variável e pré incremento com ++ no início da variável
        # outros incremento e decremento são os pós colocado -- ou ++ depois da variável
    ?>
    <h2>Variáveis Referenciadas</h2>
    <?php 
        $a = 3;
        $b = &$a; //& prende a variável a ao b e os dois ficam com o mesmo valor caso o b mude
        $b += 5;
        echo "A variável A vale $a. <br/>";
        echo "A variável B vale $b.";
    ?>
    <h2>Variáveis de Variáveis</h2>
    <?php 
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x. <br/>";
        echo "O valor da variável abc criada é $abc.";
    ?>
</body>
</html>