<?php
//IMPEDE a aplicação de SOFRER FATAL ERROR
    try {   // O erro acontece dentro do TRY
        echo '<h3> ** TRY ** </h3>';

        // $sql = 'select * from clientes';
        // mysql_query($sql);

        if(!file_exists('require_arquivo_a.php')){ // app morre na linha 13
            throw new Exception('O arquivo em questão deveria estar disponivel as ' . date('d/m/Y H:i:s') . ' mas não estava. continuaremos mesmo assim.');
        }

    } 
    //Tipo Error se dá em um trecho de codigo não esperado
    catch (Error $e) { // é capturado pelo CATCH e transformado em uma VARIAVEL
        echo '<h3> ** CATCH ERRO** </h3>';
        echo'<p style="color: red;">' . $e . '</p>';
    }
    //tipo exception se dá de maneira proposital, para teste via THROW
    catch (Exception $e) {
        echo '<h3> ** CATCH EXCEPTION ** </h3>';
        echo'<p style="color: red;">' . $e . '</p>';
    }
     finally { // Continuidade ao código <OPCIONAL !!!>
        echo '<h3> ** FINALLY ** </h3>';
    }

?>