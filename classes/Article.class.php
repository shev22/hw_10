<?php




//include '../includes/autoloader.inc.php';

class Article extends Dbh{

    protected function getArticle(){

        $sql = "SELECT * FROM `posts` 
        INNER JOIN authors 
        ON authors.id = posts.author_id
        INNER JOIN categories 		
        ON categories.id = posts.category_id"; 
        //  //WHERE posts.id =5";
        $stmt = $this ->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt ->fetchAll();

       
        return $results;
    } 

}