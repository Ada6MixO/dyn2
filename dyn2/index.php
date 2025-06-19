<?php
require_once 'db.php';
require_once 'functions.php';
$books = getBooks($pdo);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Moje knihy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Moje oblíbené knihy</h1>
        <a href="add.php" class="mb-4 inline-block px-4 py-2 bg-green-500 text-white rounded">Přidat knihu</a>

        <?php foreach ($books as $book): ?>
            <div class="p-4 mb-2 shadow rounded <?= genreColor($book['genre']) ?>">
                <h2 class="text-xl font-semibold"><?= htmlspecialchars($book['title']) ?></h2>
                <p>Autor: <?= htmlspecialchars($book['author']) ?></p>
                <p>Žánr: <?= htmlspecialchars($book['genre']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
