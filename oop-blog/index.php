<?php

require_once "vendor/autoload.php";

$requestedOperation = 'list';
if(isset($_GET['op']) && method_exists('ArticleController', $_GET['op']))
    $requestedOperation = $_GET['op'];

ArticleController::$requestedOperation();