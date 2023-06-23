<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditionals and Booleans</title>

    <style>
        body {
            font-family: sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php
    $name = "Clean Code";
    $read = false; //booleans são valores verdadeiros(true) ou falsos(false)

    //declaração de condicional
    if ($read) { //se condição for true, executa este bloco de {}
        $message = "You Have read Clean Code";
    } else { //se condição for false, executa este bloco
        $message = "You Have NOT read Clean Code";
    }
    ?>

    <h1>
        <!-- Declaração de echo simplificada com php, mais resultado da condicional acima-->
        <?= $message ?>
    </h1>
</body>
</html>