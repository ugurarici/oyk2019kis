<?php foreach($allArticles as $article): ?>
    <a href="detail.php?id=<?=$article->id?>">
        <?=$article->title?>
    </a>
    <br>
<?php endforeach; ?>
<hr>
<a href="create.php">+ Yeni Ekle</a>