<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Internas</title>
</head>
<body>
    <h1>Funções String em PHP</h1>
    <p>Funções já vistas foram:<br>printf()<br>print_r()<br>wordwrap()<br>str_len()<br>trim()<br>ltrim()<br>rtrim()<br>str_word_count()<br>explode()<br>str_split()<br>implode()<br>chr()<br>ord()<br><br></p>
    <?php //função interna strtolower
        $nome = "Caio Fernandes";
        $nome2 = strtolower($nome); //ele transforma as letras maiúsculas em minúsculas
        echo "<h2>strtolower</h2>";
        echo "Seu nome é $nome2."; //vai aparecer o nome com letras minúsculas
    ?>
    <?php //função interna strtoupper
        $nome = "Caio Fernandes";
        $nome2 = strtoupper($nome); //ele transforma as letras minúsculas em maiúsculas
        echo "<h2>strtoupper</h2>";
        echo "Seu nome é $nome2."; //vai aparecer o nome com letras maiúsculas
    ?>
    <?php //função interna ucfirst
        $nome = "caio fernandes";
        $nome2 = ucfirst($nome); //ele transforma a primeira letra em maiúscula
        echo "<h2>ucfirst</h2>";
        echo "Seu nome é $nome2."; //vai aparecer a primeira letra em maiúscula
    ?>
    <?php //função interna ucwords
        $nome = "caio fernandes";
        $nome2 = ucwords($nome); //ele transforma a primeira letra de cada palavra em maiúscula
        echo "<h2>ucwords</h2>";
        echo "Seu nome é $nome2."; //vai aparecer a primeira letra  de cada palavra em maiúscula
    ?>
    <?php //função interna strrev
        $nome = "caio fernandes";
        $nome2 = strrev($nome); //ele escreve as palavras ao contrário
        echo "<h2>strrev</h2>";
        echo "Seu nome é $nome2."; //vai aparecer o nome ao contrario
    ?>
    <?php //função interna strpos
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP"); //ele mostra a posição da palavra escolhida
        echo "<h2>strpos</h2>";
        echo $frase."<br>A string PHP foi encontrada na posição $pos"; //vai mostra a posição da string PHP, que é 17, o local do primeiro P
        //se procurar uma string e ela não existir, vai aparecer vazia
    ?>
    <?php //função interna stripos
        $frase = "Estou aprendendo php";
        $pos = stripos($frase, "PHP"); //ele mostra a posição da palavra escolhida sem se preocupar se está maiúscula ou minúscula
        echo "<h2>stripos</h2>";
        echo $frase."<br>A string PHP foi encontrada na posição $pos"; //vai mostra a posição da string PHP, que é 17, o local do primeiro P, sendo maiúscula ou minúscula
        //se procurar uma string e ela não existir, vai aparecer vazia
    ?>
    <?php //função interna substr_count
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $count = substr_count($frase, "PHP"); //ele diz quantas vezes apareceu a string escolhida
        echo "<h2>substr_count</h2>";
        echo "PHP foi encontrado $count vezes"; //vai dizer a quantidade de vezes que a string PHP apareceu
        //A palavra tem que está idêntica no texto para ser encontrada, ou seja, maiúscula ou minúscula
    ?>
    <?php //função interna substr
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 7); //ele pega as 6 primeiras string
        echo "<h2>substr</h2>";
        echo "$sub => quando substr($ site, 0, 7)<br>"; //vai aparecer Curso e
        $sub = substr($site, 7); //ele pega as 7 últimas string sem contar o acento
        echo "$sub => quando substr($ site, 7)<br>"; //vai aparecer m Vídeo
        $sub = substr($site, -8); //ele pega as 7 últimas string contando o acento
        echo "$sub => quando substr($ site, -8)<br>"; //vai aparecer m Vídeo
        $sub = substr($site, -6, 3); //ele analisa as 6 últimas string pegando as 3 primeiras contando o acento
        echo "$sub => quando substr($ site, -6, 3)<br>"; //vai aparecer Ví
    ?>
    <?php //função interna STR_PAD_RIGHT, STR_PAD_LEFT e STR_PAD_BOTH
        $nome = "Fernandes";
        $novo = STR_PAD($nome, 30, "-", STR_PAD_RIGHT); //ele coloca espaços preenchendo 30 caracteres à direita
        echo "<h2>STR_PAD_RIGHT</h2>";
        echo "Meu sobrenome é $novo, entendeu?"; //vai colocar o nome com os 30 espaços à direita  
        $novo = STR_PAD($nome, 30, "-", STR_PAD_LEFT); //ele coloca espaços preenchendo 30 caracteres à esquerda
        echo "<h2>STR_PAD_LEFT</h2>";
        echo "Meu sobrenome é $novo, entendeu?"; //vai colocar o nome com os 30 espaços à esquerda  
        $novo = STR_PAD($nome, 30, "-", STR_PAD_BOTH); //ele coloca espaços preenchendo 30 caracteres e centralizando o nome
        echo "<h2>STR_PAD_BOTH</h2>";
        echo "Meu sobrenome é $novo, entendeu?"; //vai colocar o nome com os 30 espaços centralizados
    ?>
    <?php //função interna str_repeat
        $txt = str_repeat("Php", 5);
        echo "<h2>str_repeat</h2>";
        print("O texto gerado foi $txt<br>"); //vai repetir Php 5 vezes
        print(str_repeat("-", 50));//vai repetir - 50 vezes
    ?>
    <?php //função interna str_replace
        $frase = "Gosto de Estudar Matemática";
        $nova = str_replace("Matemática", "PHP", $frase);
        echo "<h2>str_replace</h2>";
        print($nova); //vai aparecer Gosto de estudar PHP
        //se a palavra estiver diferente, não vai funcionar, mas se colocar i antes de replace ele funciona ex: $nova = str_ireplace("matemática", "PHP", $frase);
    ?>
</body>
</html>