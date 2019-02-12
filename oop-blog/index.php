<?php

require_once "vendor/autoload.php";
require_once "classes/Article.php";
require_once "classes/ArticleController.php";

$requestedOperation = $_GET['op'];
if(!method_exists('ArticleController', $requestedOperation))
    $requestedOperation = "list";

ArticleController::$requestedOperation();