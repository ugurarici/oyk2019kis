<?php
//  yeni makalenin kayıt işlemi yapılır

require_once "classes/Article.php";

$article = new Article;
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$article->save();

header("Location: detail.php?id=".$article->id);