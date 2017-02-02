<?php
/**
 * Created by PhpStorm.
 * User: koluchiy
 * Date: 24.01.17
 * Time: 15:23
 */
function articles_all($link){
    // Формируем запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    // Извлекаем данные
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;

}

function articles_get($link,$id_article){

    $query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $article = mysqli_fetch_assoc($result);

    return $article;


}

function articles_new ($link,$title,$date,$content){

    $title = trim($title);
    $content = trim($content);

    if ($title == '')
        return false;

    $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";

    $query = sprintf($t,mysqli_real_escape_string($link,$title),mysqli_real_escape_string($link,$date),mysqli_real_escape_string($link,$content));


    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error());

    return true;

}

function articles_edit ($id,$title,$date,$content){

}

function articles_delete ($id){

}