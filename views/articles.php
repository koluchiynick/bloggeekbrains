<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet"href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Мой первый блог</h1>
    <a href="admin">Панель Администратора</a>
    <div>
        <?php foreach ($articles as $a): ?>
        <div class="article">
            <h3>
                <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
            </h3>
            <em>Опубликованно: <?=$a['date']?></em>
            <p><?=$a['content']?></p>
        </div>
        <?php endforeach ?>
    </div>
    <footer>
        <p>Мой первый блог <br>Copyright &copy; 2017</p>
    </footer>
</div>

</body>
</html>