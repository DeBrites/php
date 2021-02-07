<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <h2>Toda variável começa com $</h2>
    <h1>No PHP não existe declaração de variáveis!</h1>
    <?php echo"Porém é possível modificar o tipo de variável. <br/><br/>";?>
    <p>O parágrafo acima possui um ECHO com BREAK</p>
    <?php
        $n = 21; 
        $no = "Caio";
        $nom = (string)"Brites";
        echo $no;
        echo $no."tem<br/>".$n."anos<br/>";
        echo "$no tem $n anos<br/>";
    ?> <!-- Aqui se usa as variáveis com $ no começo, e o comando echo chama a váriavel $no que contém o nome Caio -->
    <!-- Se colocar a variável como $nom = (int)"Brites"; o resultado na tela será (0), e, se colocar $nom = (int)"10Brites"; aparecerá como resultado (10), mas se eu colocar $nom = (int)"Brites10"; então aparecerá (0) pois só identifica inteiro no começo. -->
    <!--Se for digitado echo '$no tem $n anos'; com aspas simples aparecerá na tela ($no tem $n anos) pois ele não pega a variável-->
    <p>Os comandos ECHO, PRINT e PRINTF servem para gerar saídas na tela.<br/></p>
    <p>Como criar variáveis em PHP? Como declarar variáveis em PHP? Quais são os tipos primitivos do PHP? Como realizar conversões em PHP? A resposta para essas e muitas outras perguntas você vai ter nessa quarta aula do Curso Grátis de PHP para Iniciantes.<br/>

Antes de mais nada, é importante que você entenda os conceitos de variáveis em Algoritmos e saiba utilizá-las corretamente. Nós temos uma aula no Curso Grátis de Algoritmos que fala sobre variáveis, assista esse vídeo antes de prosseguir com essa aula, caso você não esteja familiarizado com esse conceito.<br/>

Comandos de saída do PHP:<br/>

Os comandos ECHO, PRINT e PRINTF servem para gerar saídas na tela. Um exemplo simples desse comando é:<br/>

echo “Estou aprendendo variáveis em PHP”;<br/>

A pronúncia correta do comando echo é ECO (aquele som que se repete quando gritamos dentro de cavernas, lembra?).<br/>

Note que no comando acima, foi utilizada uma tag HTML para a quebra de linha. Isso é possível, já que o PHP se integra com essa tecnologia. Fique à vontade para utilizar tags de marcação hipertexto dentro dos seus comandos de saída em PHP.<br/>

Usando variáveis<br/>

Variáveis são espaços na memória do computador que podem conter valores. Variáveis simples armazenam apenas um valor de cada vez, dependendo do seu tipo.<br/>

Todas as variáveis no PHP possuem um $ na frente e seguem as mesmas regras de construção de nomes de identificadores:<br/>

– Devem começar com uma letra (após o $)<br/>

– Podem conter letras e números<br/>

– Não podem conter caracteres acentuados<br/>

– Não podem conter símbolos como % # * & etc (exceto _ e $)<br/>

OBS: O PHP faz a diferenciação entre as letras maiúsculas e minúsculas, por isso recomendamos que você utilize apenas identificadores com letras minúsculas em seus scripts PHP.<br/>

Declaração de variáveis<br/>

No PHP não existe a necessidade de declarar variáveis. Os tipos serão atribuídos automaticamente de acordo com o valor que a variável receber. Esse processo é conhecido como coerção. Isso pode ser até empolgante no início, mas é preciso prestar bastante atenção para não fazer nada errado.<br/>

Você pode forçar um tipo primitivo a uma variável por TYPECAST, utilizando (int) (real) (float) (double) (string) antes do valor na atribuição.<br/>

Não existe typecast para variáveis lógicas. Os valores booleanos são considerados números, sendo o valor 1 atribuído para true e vazio para false.<br/>

Atribuição de valores<br/>

Atribuir valor é colocar um conteúdo em uma variável. Utilizamos o operador de atribuição = para realizar essa tarefa. Veja alguns exemplos:<br/>

$idade = 15;<br/>

$salario = 1500.25;<br/>

$nome = “Gustavo”;<br/>

$casado = true;<br/>

Concatenação de valores<br/>

Concatenar é juntar valores para tratá-los em conjunto. A concatenação em PHP é realizada pelo operador ponto (.) como no trecho de código a seguir.<br/>

$idade = 18;<br/>

$nome = “Maria”;<br/>

echo $nome . “ tem “ . $idade . “ anos “;<br/>

No script acima, será exibido “Maria tem 18 anos”, já que acontecerão concatenações.<br/>

Porém, já que os identificadores PHP começam com um $, é possível realizar o comando de saída utilizando um modo simplificado:<br/>

echo “$nome tem $idade anos”; O comando acima pode ser usado sem problemas, contanto que sejam utilizadas aspas duplas.</p>
</body>
</html>