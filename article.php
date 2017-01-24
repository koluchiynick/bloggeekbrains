<?php
/**
 * Created by PhpStorm.
 * User: koluchiy
 * Date: 24.01.17
 * Time: 15:27
 */
require_once ("database.php");
require_once ("models/articles.php");

$article = articles_get($_GET['id']);

include ("views/article.php");