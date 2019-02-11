<h1><?=$article->title?></h1>
<p>
    <?=$article->content?>
</p>
<hr>
Oluşturulma: <?=$article->created_at?><br>
Güncellenme: <?=$article->updated_at?>
<hr>
<a href="?op=edit&id=<?=$article->id?>">Düzenle</a> - 
<a href="?op=delete&id=<?=$article->id?>" onclick="return confirm('Gerçten mi? :(')">Sil</a>
<hr>
<a href="?op=list">Ana sayfaya dön</a>
