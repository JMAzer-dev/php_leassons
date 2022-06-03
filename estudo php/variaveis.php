<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso php</title>
    </head>
    
    <body>
        <?php
                        #...................DEMONSTRAÇÃO DE VARIAVEIS..................


            $pessoa = ['jj' ,34 ,80.5 ,true ,'azul' ] ;

            echo 'Olá meu nome é ' . $pessoa[0] . ' tenho ' . $pessoa[1] . ' anos, minha cor preferida é ' . $pessoa[4] . ',<br>' .
            "atualmente tenho " . $pessoa[2] . 'Kgs e meu status de fumante é ' . $pessoa[3] . '.';
            #...........OU..........
            echo '<br>';
            echo '<br>';
            echo "Olá meu nome é $pessoa[0] tenho $pessoa[1] anos, minha cor preferida é $pessoa[4],<br>
            atualmente tenho $pessoa[2]Kgs e meu status de fumante é $pessoa[3].";

        ?>
        <h1>Ficha cadastral</h1>
        <br>
        <p>nome: <?=$pessoa[0]?></p>
        <p>idade: <?=$pessoa[1]?></p>
        <p>peso: <?=$pessoa[2] ?> Kgs</p>
        <p>fumante: <?=$pessoa[3]?></p>
    </body>
</html>