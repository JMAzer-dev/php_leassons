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
        $lista = ['sofa','mesa','cadeira','fogao','geladeira'];
        foreach($lista as $lista){
            echo "$lista ";

            if($lista == 'mesa'){
                echo 'Compre a mesa';
            }
            echo '<br>';
        }
        echo '<hr>';
        
        // $funcionarios = [ 'nome' => ['João', 'Julia', 'Maria'],
        //                  'salario' => ['1200','1000','1100']

        // ];
        $funcionarios = [ 
            ['nome' => 'jão' ,'salario' => 1200.00 , 'setor' => 'A' , 'folga' => 'true'],
            ['nome' => 'fefa' ,'salario' => 1100.00 , 'setor' => 'B' , 'folga' => 'false'],
            ['nome' => 'juma', 'salario' => 1000.55 , 'setor' => 'C' , 'folga' => 'true']
        ];


        echo '<pre>';
        print_r($funcionarios);
        echo '<hr>';

        foreach($funcionarios as $idx => $funcionario) {
            foreach($funcionario as $idx2 => $valor){
                echo '<pre>';
                print_r("$idx2 - $valor");
            }
            echo '<hr>';
        }

    ?>
</body>
</html>