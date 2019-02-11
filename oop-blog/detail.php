<?php

//  $_GET üzerinden aldığımız id'ye göre makale detayı gösterilir

require_once "classes/Article.php";

$article = Article::find((int)$_GET['id']);
echo $article->title;
