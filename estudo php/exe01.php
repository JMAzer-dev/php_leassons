<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = 55;
        $peso = 40.5;
        $peso = (string) $peso;
        if($idade > 15 && $idade < 70 && $peso > 49){
            echo "você possui $idade anos e está com $peso Kgs.<br> Portanto, Atende aos requisitos de doação de sangue.";
        } else{
            echo "você possui $idade anos e está com $peso Kgs.<br> Portanto, Não atende aos requisitos de doação de sangue.";
        };

    ?>

</body>
</html>