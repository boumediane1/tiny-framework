<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
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
                ],
        ];
    ?>

<ul>
    <?php foreach (array_filter($books, fn ($book) => $book['author'] === 'Andy Weir' ) as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
