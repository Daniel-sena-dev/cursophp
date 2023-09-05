<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <?php 
        /*
            "Double quoted"
            'single quoted'
             Heredoc 
              Nowdoc       
            . -> concatenação
        */ 
        $nome = "Daniel";
        $sobrenome = "Sena";
        echo "$nome \"Vasconcelos\" $sobrenome <br>";
        echo "PHP \u{1f418}<br>";
        echo 'PHP \u{1f418}<br>';
        echo "Olá $nome<br>";
        echo 'Olá $nome<br>';

        const ESTADO = "RN";
        echo "Moro no " . ESTADO . "<br>";
        echo date('Y');

        $curso = "PHP";
        $ano = date('Y');

        //Heredoc
        echo<<< FRASE
            Estou estudando
                $curso em $ano
                <br>
        FRASE;

        //Nowdoc
        echo <<< 'FRASE'
            Estou estudando 
                $curso em $ano
        FRASE;
    ?>
</body>
</html>