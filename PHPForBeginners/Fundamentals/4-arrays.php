<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>

    <style>
        body {
            font-family: sans-serif;
            display: grid;
            place-items: start center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
<?php
//declaração de uma váriavel array, os valores do array devem estar entre [],
// cada valor do array deve ser separado por virgula
$books = [
    "Clean Code",
    "Clean Architecture",
    "Design Patterns"
];
?>

<ul>

    <!-- O foreach, realiza uma busca dentro do array de books e atribui o -->
    <!-- valor de cada item do array a variavel $book -->
    <?php foreach ($books as $book): ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>