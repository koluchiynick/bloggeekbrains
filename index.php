<?php
/**
 * Created by PhpStorm.
 * User: koluchiy
 * Date: 24.01.17
 * Time: 15:15
 */

require_once ("database.php");
require_once ("models/articles.php");

$link = db_connect();
$articles = articles_all($link);

include ("views/articles.php");
