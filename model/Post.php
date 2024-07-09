<?php 


class Post extends coneccio{

    protected function addPosts($title, $text){

        $error= 0;
        $stmt = $this-> conectar()->prepare("INSERT INTO posts (`titulo`, `text`) VALUES (?, ?);");

        if(!$stmt->execute(array($title, $text))){
            $error=1;
        }

        $stmt=null;
        
        return $error;
        
    }


    protected function getAllPost() {

        $error= 0;
        $stmt = $this->conectar()->prepare("SELECT titulo , text, data FROM posts");
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