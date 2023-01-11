<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>
</head>
<body>

    <?php
        session_start()
    ?>

    <?php
    if(!empty($_SESSION['password'])) {
        echo "<h1> Ecco la tua password: </h1> <br>" . $_SESSION['password'];  

        }
    ?>

</body>
</html>