<?php
function getBooks($pdo) {
    $stmt = $pdo->query("SELECT * FROM books ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertBook($pdo, $title, $author, $genre) {
    $stmt = $pdo->prepare("INSERT INTO books (title, author, genre) VALUES (?, ?, ?)");
    $stmt->execute([$title, $author, $genre]);
}

function genreColor($genre) {
    $colors = [
        'fantasy' => 'bg-purple-200',
        'sci-fi' => 'bg-blue-200',
        'romance' => 'bg-pink-200',
    ];
    return $colors[strtolower($genre)] ?? 'bg-gray-200';
}
