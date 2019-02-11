<?php

//  yeni makalenin kayıt işlemi yapılır

require_once "classes/Article.php";

$article = new Article;
$article->title = "Bu modelden ikinci makale";
$article->content = "Bu modelden ikinci makale";
$article->save();

$article->title = "ama değişti";
$article->save();