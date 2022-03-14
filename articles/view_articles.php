<?php

require_once "../includes/add_article.inc.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<header>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand">Articles</a>
            <div class="navbar-nav">
                <a href="../index.php">HOME PAGE</a>
            </div>
        </div>
    </nav>
    <?php

    echo "<div class = 'posts-container'>";
    foreach ($articles as $article) {

        echo "<div class = 'posts'>";
        echo "<hr><span>Cartigory</span> : " . $article['title'];
        echo "<br>";
        echo "<span>author</span> : " . $article['author_name'];
        echo "<br>";
        echo $article['content'];
        echo "<br>";
        echo "<span>Posted on </span>: " . $article['date'];
        echo "<br><hr>";
        echo "</div>";
    }

    echo "</div>";

    ?>

</header>