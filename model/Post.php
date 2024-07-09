<?php 


class Post extends coneccio{

    protected function addPosts($title, $text, $img){

        $error= 0;
        $stmt = $this-> conectar()->prepare("INSERT INTO posts (`titulo`, `text`, 'img ') VALUES (?, ? , ?);");

        if(!$stmt->execute(array($title, $text, $img))){
            $error=1;
        }

        $stmt=null;
        
        return $error;
        
    }


    protected function getAllPost() {

        $error= 0;
        $stmt = $this->conectar()->prepare("SELECT titulo , text,  data , img FROM posts");
        if(!$stmt->execute()){
               
        }
       
        if($stmt->rowCount()>0){
          $res=$stmt->fetchAll();    
        }

       $stmt=null;
        return $res;

    }



}


?>