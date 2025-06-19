<?php
require_once 'db.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $genre = trim($_POST['genre']);

    if ($title !== '' && $author !== '' && $genre !== '') {
        insertBook($pdo, $title, $author, $genre);
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Přidat knihu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Přidat novou knihu</h1>
        <form method="POST" class="space-y-4">
            <input type="text" name="title" placeholder="Název" required class="w-full px-3 py-2 border rounded">
            <input type="text" name="author" placeholder="Autor" required class="w-full px-3 py-2 border rounded">
            <input type="text" name="genre" placeholder="Žánr" required class="w-full px-3 py-2 border rounded">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Uložit</button>
        </form>
        <a href="index.php" class="inline-block mt-4 text-blue-600">Zpět</a>
    </div>
</body>
</html>
