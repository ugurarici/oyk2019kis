<?php

class ArticleController
{
    static public function list()
    {
        $allArticles = Article::all();
        require "views/list.php";
    }

    static public function create()
    {
        require "views/create.php";
    }

    static public function store()
    {
        $article = new Article;
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->save();

        $mc = new MailerController;
        $mc->newArticleNotification($article);

        header("Location: ?op=detail&id=".$article->id);
    }

    static public function delete()
    {
        $article = Article::find((int)$_GET['id']);
        $article->delete();

        header("Location: ?op=list");
    }

    static public function detail()
    {
        $article = Article::find((int)$_GET['id']);
        require "views/detail.php";
    }

    static public function edit()
    {
        $article = Article::find((int)$_GET['id']);
        require "views/edit.php";
    }

    static public function update()
    {
        $article = Article::find((int)$_POST['id']);
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->save();

        header("Location: ?op=detail&id=".$article->id);
    }

}