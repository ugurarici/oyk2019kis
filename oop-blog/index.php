<?php

//  son yazıları listeleyeceğiz

$con = new PDO("mysql:host=localhost;dbname=oyk19k_blog;charset=utf8mb4;", "root", "root");

$articles = $con->query("SELECT * FROM articles");

var_dump($articles);

foreach($articles as $article) {
    var_dump($article);
}