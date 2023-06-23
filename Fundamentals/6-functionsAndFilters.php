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

    // Introdução há funções:
    // Ao invés de sobrecarregar um local do script com decisões atrás de decisões,
    // é uma boa solução fazer esses filtros e decisões serem realizado através de
    // funções que cuidaram de todos estes processo
    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, "Philip K. Dick") as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= "{$book['name']} - By {$book['author']}"?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>