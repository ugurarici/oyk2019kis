<?php
// makale güncelleme formu gösterilir

require_once "classes/Article.php";

$article = Article::find((int)$_GET['id']);

require "views/edit.php";