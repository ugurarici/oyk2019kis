<?php

class Article
{
    public $id;
    public $title;
    public $content;
    public $created_at;
    public $updated_at;
    public $view_count;

    protected $con;

    public function __construct()
    {
        $this->con = new PDO("mysql:host=localhost;dbname=oyk19k_blog;charset=utf8mb4;", "root", "root");
    }

    public function save()
    {
        if(is_null($this->id)) {
            $this->create();
        } else {
            $this->update();
        }
    }

    protected function create()
    {
        //  INSERT INTO `articles` (`title`, `content`) VALUES ('baslik', 'icerik');
        $createQuery = $this->con->prepare("INSERT INTO articles (title, content) VALUES (:baslik, :icerik)");
        $result = $createQuery->execute(array(
            "baslik" => $this->title,
            "icerik" => $this->content
        ));

        $this->id = $this->con->lastInsertId();

        return $result;
    }

    protected function update()
    {
        //  UPDATE `articles` SET `title` = 'Başlık değişti', `content` = 'içerik değişti' WHERE `articles`.`id` = 1;
        $updateQuery = $this->con->prepare("UPDATE articles SET title = :baslik, content = :icerik, updated_at = CURRENT_TIMESTAMP WHERE id = :kimlik");
        return $updateQuery->execute(array(
            "kimlik" => $this->id,
            "baslik" => $this->title,
            "icerik" => $this->content
        ));
    }

    public function delete()
    {
        $deleteQuery = $this->con->prepare("DELETE FROM articles WHERE id = :kimlik");
        return $deleteQuery->execute(['kimlik'=>$this->id]);
    }

    protected function checkIfExists()
    {
        $checkQuery = $this->con->prepare("SELECT COUNT(id) as satirSayisi FROM articles WHERE id = :kimlik");
        $checkQuery->execute(['kimlik'=>$this->id]);
        $response = $checkQuery->fetch();
        
        if($response['satirSayisi']>0) return true;

        return false;
    }

    public function initById($disaridanGelenKimlik)
    {
        //  bir Article objesinin içini, veritabanındaki ilgili kimlik
        //  bilgisiyle saklı satırın bilgileriyle dolduralım
        $selectQuery = $this->con->prepare("SELECT * FROM articles WHERE id = :kimlik");
        $selectQuery->execute(['kimlik'=>$disaridanGelenKimlik]);
        $articleResult = $selectQuery->fetch(PDO::FETCH_OBJ);
        
        $this->id = $articleResult->id;
        $this->title = $articleResult->title;
        $this->content = $articleResult->content;
        $this->created_at = $articleResult->created_at;
        $this->updated_at = $articleResult->updated_at;
        $this->view_count = $articleResult->view_count;

        unset($articleResult);
    }

    public static function find($id)
    {
        $no = new self;
        $no->initById($id);
        return $no;
    }

    public function allArticles()
    {
        $allQuery = $this->con->prepare("SELECT * FROM articles");
        $allQuery->execute();
        $allArticles = $allQuery->fetchAll(PDO::FETCH_CLASS, 'Article');
        return $allArticles;
    }

    public static function all()
    {
        $articleHelper = new self;
        return $articleHelper->allArticles();
    }   

}