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

    function generatePassword($lunghezza ) {
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.@-';

        // conteggio lunghezz stringa
        $count = mb_strlen($caratteri);

        // var_dump($count);

        // ciclo for per la creazione della pasword della lunghezza ideale 
        for ($i = 0, $risultato = ''; $i < $lunghezza ; $i++) {

            // mi va a recuperare in maniera randomica i caratteri 
            $index = rand(0, $count - 1);

            // var_dump($index);

            // mi creo il risultato della pasword
            $risultato .= mb_substr($caratteri, $index, 1);
        }

        return $risultato;
    }

    ?>
</body>
</html>