<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>

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
    // Arrays associativos, são arrays mais organizados. Em casos onde a consulta será feita, a uma api
    // ou um banco de dados, é normal receber este tipo de array associativo.
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>

            <li>
                <a href="<?= $book['purchaseUrl'] ?>" target="_blank">
                    <?= $book['name']
                    // Para utilizar os valores do array associativo é preciso passar a chave do array,
                    // neste exemplo a chave foi nomeada então foi preciso utilizar o nome da chave.
                    // Ou seja, a posição da chave 'name' que seria 0, não está mais disponível
                    // somente o nome, atribuído a ela?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>