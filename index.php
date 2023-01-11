<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasword generator</title>
</head>
<body>

    <?php
    session_start();
        include __DIR__ . "/helper.php";
        $lunghezza = $_GET["number"];
    ?>

    <h1>Strong pasword generator</h1>

    <form action="">
        <label for="number">Lunghezza password</label>
        <input type="number" name="number" id="">
        <input type="submit" value="Genera">
    </form>

    <?php

        if($lunghezza){

            header("location: ./landingPage.php");
        }

        $_SESSION['lenght'] = $lunghezza;

        $paswordGenerata = generatePassword($lunghezza);

        $_SESSION['password'] = $paswordGenerata;
    ?>

</body>
</html>