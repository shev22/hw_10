<?php

//include '../includes/autoloader.inc.php';

class ArticleView extends Article{
   
 
    public function showArticle($name){
        $results = $this->getArticle($name);
        return $results;

    }
 }
 