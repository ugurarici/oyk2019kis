<?php

//  son yazıları listeleyeceğiz

// $con = new PDO("mysql:host=localhost;dbname=oyk19k_blog;charset=utf8mb4;", "root", "root");

// $articles = $con->query("SELECT * FROM articles");

// var_dump($articles);

// foreach($articles as $article) {
//     var_dump($article);
// }

require_once "classes/Article.php";

$articleHelper = new Article;

$allArticles = $articleHelper->allArticles();

foreach($allArticles as $article):
?>
    <a href="detail.php?id=<?=$article->id?>">
        <?=$article->title?>
    </a>
    <br>
<?php
endforeach;