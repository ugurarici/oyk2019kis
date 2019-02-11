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
