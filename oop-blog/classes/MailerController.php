<?php

use PHPMailer\PHPMailer\PHPMailer;

class MailerController
{
    protected $mailer;
    
    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
        $this->mailer->CharSet = 'utf-8';
        $this->mailer->SMTPDebug = 2;
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.mailtrap.io';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = 'f80676e0164323';
        $this->mailer->Password = '56df70b2f53955';
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->Port = 465;
        $this->mailer->setFrom('efendibir@yazar.com', 'Efendi Bir Yazar');
    }
    
    public function newArticleNotification(Article $article)
    {
        $this->mailer->addAddress('joe@example.net');

        $this->mailer->isHTML(true);
        $this->mailer->Subject = 'Yeni Makale: '.$article->title;
        $this->mailer->Body    = "<h1>".$article->title."</h1><p>Sitemizde yeni bir makale yayınlandı";
        $this->mailer->Body    .= " lütfen ziyaret edip okuyun :) öpüldünüz";
        $this->mailer->AltBody = $article->title . ' - Sitemizde yeni bir makale yayınlandı  lütfen ziyaret edip okuyun :) öpüldünüz';
        
        $this->mailer->send();
    }
}