<!DOCTYPE html>
<html lang="pt">
<head>
    <?php //aqui se pode colocar php e estão as configuracoes para estilizar o texto
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";//aqui ele pega a variavel texto e se tiver nular ele cria Texto Genérico
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração: HTML5 + PHP</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>; /*Aqui voce precisa colocar no css o codigo em php com o chamado echo para a varíavel ou não irá funcionar*/
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php 
        $valor = isset($_GET["v"])?$_GET["v"]:0; //isset parametro de se foi configurado, e logo a seguir vem um operador ternário para não der erro no php dando um valor fixo quando não puserem nada
        echo "O valor enviado foi $valor.<br/>";
        $rq = sqrt($valor); // faz a raiz quadrada
        echo "A raiz quadrada de $valor é igual a ". number_format($rq, 2). "<br/>";//numero é formatado para duas casas decimais    
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";//nome é configurado através de um operador ternário
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;//ano é configurado
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";//sexo é configurado
        $idade = date("Y") - $ano;//date mostra o ano atualizado quando colocado Y
        echo "$nome tem $idade anos e é $sexo.";
    ?><br/>
    <a href="a8-html5.html">Voltar</a> 
    <br/><!--Cria um botao para retornar a pagina html-->
    <?php 
        echo "<span class='texto'>$txt</span>";//é possível colocar códigos html no php e estilizar com span
    ?>
</div>
</body>
</html>