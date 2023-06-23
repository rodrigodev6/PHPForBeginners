<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions and Filters</title>
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
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    // Introdução há funções lambda/anonimas:
    // Essas funções são funções não declaradas com nomes, porém elas possuem diferenças
    // das funções normais(com alguns benefícios a mais). Vamos ver abaixo

    //Exemplo1
    /*
    function filter($items, $key, $value)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }
    $filteredBooks = filter($books, 'author', 'Andy Weir');
    */

    //Exemplo2 //array_filter é baseado no conceito de lambda function, nele passamos o segundo parâmetro uma function
    //este é um conceito difícil e requer mais estudo. Video para ajudar: https://www.youtube.com/watch?v=lEo4bN-2ysQ
    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2011;
    });

    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= "{$book['name']} - By {$book['author']}"?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>