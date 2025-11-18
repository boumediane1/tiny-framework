<?php

require 'functions.php';
//require 'router.php';

$pdo = new PDO('mysql:host=localhost;dbname=laracasts', 'root');

$statement = $pdo->prepare('select * from posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post) {
    echo "<li>{$post['title']}</li>";
}
