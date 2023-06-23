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