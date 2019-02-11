<?php

//  makale silme işlemi yapılır

require_once "classes/Article.php";

$article = Article::find((int)$_GET['id']);
$article->delete();

header("Location: index.php");