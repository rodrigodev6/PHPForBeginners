<?php

require 'functions.php';
//require 'router.php';
$dsn = 'mysql:host=127.0.0.1;dbname=myapp;user=root;charset=utf8';
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);