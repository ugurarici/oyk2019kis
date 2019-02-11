<?php

//  $_GET üzerinden aldığımız id'ye göre makale detayı gösterilir

require_once "classes/Article.php";

$article = Article::find((int)$_GET['id']);
?>

<h1><?=$article->title?></h1>
<p>
    <?=$article->content?>
</p>
<hr>
Oluşturulma: <?=$article->created_at?><br>
Güncellenme: <?=$article->updated_at?>
<hr>
<a href="edit.php?id=<?=$article->id?>">Düzenle</a> - 
<a href="delete.php?id=<?=$article->id?>" onclick="return confirm('Gerçten mi? :(')">Sil</a>
<hr>
<a href="index.php">Ana sayfaya dön</a>
