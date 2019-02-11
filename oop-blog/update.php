<?php

//  makale güncelleme işlemi yapılır❤

require_once "classes/Article.php";

$article = Article::find((int)$_POST['id']);
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$article->save();

header("Location: detail.php?id=".$article->id);