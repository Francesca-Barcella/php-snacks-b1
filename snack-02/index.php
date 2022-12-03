<?php
## Snack 2

/* Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 02 - fomr</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="nome">Nome</label>
            <input name="nome" id="nome" type="text">
        </div>
        <div>
            <label for="Mail">Mail</label>
            <input name="Mail" id="Mail" type="text">
        </div>
        <div>
            <label for="age">Age</label>
            <input name="age" id="age" type="text">
        </div>

    </form>

</body>

</html>