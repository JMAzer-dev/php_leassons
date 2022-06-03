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
            $usuario_possui_cartao_loja = true;
            $valor_compra = 225;
            
            $valor_frete = 50;
            if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
                $valor_frete = 0;
            };
            $valor_total = $valor_compra + $valor_frete;
            echo "Total da compra = $valor_total";
        ?>
 
    </body>
</html>