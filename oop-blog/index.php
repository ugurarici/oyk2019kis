<?php

//  tüm yazıları listeleyeceğiz

require_once "classes/Article.php";

$allArticles = Article::all();

require "views/list.php";