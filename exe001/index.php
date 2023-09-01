<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
</head>
<body>
    <h1><?php 
        $nome = "Daniel Sena";
        echo $nome;
        echo " Configurações do servidor";
    ?></h1>

    <?= "<p>O meu nome é $nome</p>"?>
    
    <?php 
        phpinfo();
        
    ?>
</body>
</html>