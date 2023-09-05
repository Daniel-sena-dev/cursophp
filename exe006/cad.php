<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            /*
                Variaveis super globais
                $_GET -> variavel para o metodo get
                $_POST -> variavel para o metodo post
                $_REQUEST -> variavel para ambos metodos 
                
                ?? -> operador de coaslecencia nula (caso nao venha dado do form)
            */
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer <b> $nome $sobrenome </b></p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para página anterior</a>
    </main>


</body>
</html>