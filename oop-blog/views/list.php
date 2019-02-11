<?php foreach($allArticles as $article): ?>
    <a href="?op=detail&id=<?=$article->id?>">
        <?=$article->title?>
    </a>
    <br>
<?php endforeach; ?>
<hr>
<a href="?op=create">+ Yeni Ekle</a>