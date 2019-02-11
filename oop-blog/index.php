<?php

//  index.php?op=list
//  index.php?op=detail&id=5
//  index.php?op=edit&id=5

require_once "classes/Article.php";
require_once "classes/ArticleController.php";

switch ($_GET['op']) {
    case 'list':
        ArticleController::list();
        break;
    case 'create':
        ArticleController::create();
        break;
    case 'store':
        ArticleController::store();
        break;
    case 'delete':
        ArticleController::delete();
        break;
    case 'detail':
        ArticleController::detail();
        break;
    case 'edit':
        ArticleController::edit();
        break;
    case 'update':
        ArticleController::update();
        break;
    default:
        header("Location: ?op=list");
        break;
}