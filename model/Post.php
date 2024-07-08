<?php 


class posts extends coneccio{

    protected function addPosts($title, $test){

        $error= 0;
        $stmt = $this-> conectar()->prepare("INSERT INTO posts (`titulo`, `test`) VALUES (?, ?);");

        if(!$stmt->execute(array($title, $test))){
            $error=1;
        }

        $stmt=null;
        
        return $error;
        
    }


    protected function getAllPost() {

        $error= 0;
        $stmt = $this->conectar()->prepare("SELECT titulo , test, data FROM posts");
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