<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP</title>
</head>
<body>
    <h1>Funções Internas para String</h1>
    <p>Obs: Funções internas para a manipulação de números <br>abs() => Valor Absoluto <br>pow() => Potenciação <br>sqrt() => Raiz quadrada <br>round() => Arredondamento <br>intval() => Valor inteiro da variável <br>number_format() => Formatação</p><br>
    <?php //função interna print_f
        $p = "leite";
        $pr = 4.5;
        echo "O $p custa $pr.<br>printf => ";
        printf("O %s custa R$ %.2f", $p, $pr);//%s chama a string e %f chama o float (número), o .2 formata o número para duas casas decimais
    ?>
    <p>%d => Valor decimal (positivo ou negativo)<br>%u => Valor decimal sem sinal (apenas positivo)<br>Além de outros valores ou parâmetros no manual do PHP</p>
    <p>print_r gera saída enquanto está fazendo testes</p>
    <?php //função interna print_r
        $v[0] = 1;
        $v[1] = 4;
        $v[2] = 3;
        print_r($v);
        echo "<br>";
        $v2 = array (3,7,6,2,1,9);
        print_r($v2);//vai aparecer -> Array ( [0] => 1 [1] => 4 [2] => 3 )
        echo "<br>";
        var_dump($v2); //vai aparecer -> array(6) { [0]=> int(3) [1]=> int(7) [2]=> int(6) [3]=> int(2) [4]=> int(1) [5]=> int(9) }
        echo "<br>";
        var_export($v2); //vai aparecer -> array ( 0 => 3, 1 => 7, 2 => 6, 3 => 2, 4 => 1, 5 => 9, )
        echo "<br><br>";
    ?>
    <p>Wordwrap serve para quebrar linha visualmente e no html</p>
    <?php //função interna wordwrap
        $t = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum fuga voluptate eos, quae corrupti suscipit id harum iste quasi veritatis officiis debitis quis, officia neque odit magni, ducimus consectetur saepe!";
        $r = wordwrap($t);//desse jeito nada muda e o texto é gerado
        echo $r. "<br><br>";
        $r = wordwrap($t, 28);//visualmente nada muda mas no código html ele está quebrando a cada 20 letras
        echo $r. "<br><br>";
        $r = wordwrap($t, 28, "<br/>");//exibe a quebra visualmente mas no código não está quebrando
        echo $r. "<br><br>";
        $r = wordwrap($t, 28, "<br/>\n");//exibe a quebra visualmente e no código
        echo $r. "<br><br>";
        $r = wordwrap($t, 5, "<br/>\n", false);//palavras que tem mais de 5 letras ele não quebra a quebra
        echo $r. "<br><br>";
        $r = wordwrap($t, 5, "<br/>\n", true);//ele quebra a linha quando a palavra tem 5 letras no máximo
        echo $r. "<br><br>";
    ?>
    <?php //função interna strlen
        $txt = "Curso em Vídeo";
        $tamanho = strlen($txt);//ele conta quantas string existe, contando os espaços e acentos
        echo "<br>strlen<br>$tamanho<br>";//vai aparecer 15 string
    ?>
    <?php //função interna trim
        $nome = "   José da Silva   ";
        echo(strlen($nome));//vai aparecer 20
        $novo = trim($nome);//elimina os espaços no inicio e fim e mantem no meio do nome
        echo($novo); //vai mostrar o nome sem os espaços no início e fim
        echo(strlen($novo));//vai aparecer 14
        //A função LTRIM ou ltrim (left trim) tira o espaço do início
        //A função RTRIM ou rtim (right trim) tira o espaço no final
    ?>
    <?php //função interna str_word_count
    $frase = "Eu vou estudar PHP";
    $count = str_word_count($frase);//$count = str_word_count($frase); ou $count = str_word_count($frase,0); ele conta quantas palavras existem
    echo "<br><br>str_word_count => Eu vou estudar PHP<br><br>$count<br>";
    $count = str_word_count($frase,1);//ele conta quantas palavras existem na forma de vetor
    //echo $count."<br><br>"; vai dar erro pois é um array
    print_r($count);
    echo "<br><br>";
    $count = str_word_count($frase,2);//ele conta quantas palavras existem na forma de vetor sendo que no índice ele posiciona de acordo com a posição da palavra
    print_r($count);
    ?>
    <?php //função interna explode
    echo "<br><br>";
    $site = "Curso em Vídeo";
    $vetor = explode(" ",$site); //ele explode os espaços pegando as palavras e pondo em vetor
    print_r($vetor);
    ?>
    <?php //função interna str_split
        echo "<br><br>";
        $nome = "Maria";
        $vetor = str_split($nome);//ele pega a string e separa as letras
        print_r($vetor);//mostra cada letra num índice separado dentro de um vetor
    ?>
    <?php //função interna implode ou join
        echo "<br><br>";
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode("#", $vetor);//após enviar os strings nos índices, a função implode pega todos eles e coloca uma # entre eles
        //função join funciona da mesma maneira
        print($texto); //vai aparecer Curso#em#Vídeo
    ?>
    <?php //função interna chr
        echo "<br><br>";
        $letra = chr(67);//ele transforma o código ASCII
        echo "A letra de código 67 é $letra";//vai aparecer a letra C
    ?>
    <?php //função interna ord
        echo "<br><br>";
        $letra = "c";
        $cod = ord($letra);// ele pega a string e identifica o código ASCII dela
        print("A letra $letra tem códgo $cod"); //vai aparecer: A letra c tem código 99
    ?>
    <p>Função printf() : Permite exibir uma string com itens formatados.
    <br><br>
Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.
<br><br>
Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.
<br><br>
Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
<br><br>
Função trim() : Elimina espaços em branco antes e depois de uma string.
<br><br>
Função ltrim() : Elimina espaços no início de uma string.
<br><br>
Função rtrim() : Elimina espaços em branco no final de uma string.
<br><br>
Função str_word_count() : Conta quantas palavras uma string possui.
<br><br>
Função explode() : Quebra uma string e coloca os itens em um vetor.
<br><br>
Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.
<br><br>
Função implode() : Transforma um vetor inteiro em uma string.
<br><br>
Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
<br><br>
Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.</p>
<p>strlen("mãe") retorna 4<br>
mb_strlen("mãe","UTF-8") retorna 3 (que é o esperado)</p>
<p>str_word_count("mãe coração abrangência bênçãos",1) devolve um ARRAY com 9 elementos:<br>
"m" "e" "cora" "o" "abrang" "ncia" "b" "n" "os" isso porque os caracteres acentuados são considerados como NÃO SENDO LETRAS.
<br><br>
Para corrigir isso é necessário acrescentar a lista de letras acentuadas a serem considerada como SENDO LETRAS:
str_word_count("mãe coração abrangência bênçãos",1,"çãê") devolve um ARRAY com 4 elementos:<br>
"mãe" "coração" "abrangência" "bênçãos"
</p>
<p>para que a função str_word_count sempre funcione sugiro que seja criada uma constante a ser utilizada em todos os projetos/sites com todas as acentuações que utilizamos:
<br><br>
"ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº"</p>
</body>
</html>