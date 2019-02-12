<?php

require_once "vendor/autoload.php";
require_once "classes/Article.php";
require_once "classes/ArticleController.php";

$requestedOperation = 'list';
if(isset($_GET['op']) && method_exists('ArticleController', $_GET['op']))
    $requestedOperation = $_GET['op'];

ArticleController::$requestedOperation();