<?php

//  tüm yazıları listeleyeceğiz

require_once "classes/Article.php";

$allArticles = Article::all();

foreach($allArticles as $article):
?>
    <a href="detail.php?id=<?=$article->id?>">
        <?=$article->title?>
    </a>
    <br>
<?php
endforeach;
?>
<hr>
<a href="create.php">+ Yeni Ekle</a>