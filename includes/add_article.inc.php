<?php

 require_once  "../classes/Ddb.class.php";
 require_once  "../classes/Article.class.php";
 require_once  "../classes/ArticleView.class.php";

 // require_once 'autoloader.inc.php';
    $postControl = new ArticleView();
    $articles = $postControl -> showArticle("");
    
  
   //header("location: ../Articles/view_articles.php");













