<?php

//Set up variables
$host = "localhost";
$user = "root";
$password = "123456";
$dbname = "proposes";

//Set DSN
$dsn = "mysql:host=$host;dbname=$dbname";

//Create PDO instance
$pdo = new PDO($dsn, $user, $password);

//PDO Query
// $stmt = $pdo->query('SELECT * FROM post');

//Echo result as array
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row["title"] . "<br />";
// }

//Echo result as object
// while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//     echo $row->title . "<br />";
// }

//Prepared Statements

//Fetch Mutile Posts

//User Input
$author = "CJ";
$is_published = true;
$id = 1;

//Positional Params
// $sql = "SELECT * FROM post WHERE author = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

//Named Params
// $sql = "SELECT * FROM post WHERE author = :author && is_published = :is_published";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["author" => $author, "is_published" => $is_published]);
// $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

// var_dump($posts);

//Echos the title of every post returned
// foreach ($posts as $post) {
//     echo $post->title . "<br />";
// }

//Fetch Single Post
// $sql = "SELECT * FROM post WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id" => $id]);
// $post = $stmt->fetch(PDO::FETCH_OBJ);
// echo $post->body;

//Get Row Count
// $stmt = $pdo->prepare("SELECT * FROM post WHERE author = :author");
// $stmt->execute(["author" => $author]);
// $postCount = $stmt->rowCount();

// echo $postCount;

//Insert Data
$title = "Post Five";
$body = "This is the fifth post.";
$author = "Carlos";

$sql = "INSERT INTO post(title, body, author) VALUES(:title, :body, :author)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["title" => $title, "body" => $body, "author" => $author]);
echo "Post Added";