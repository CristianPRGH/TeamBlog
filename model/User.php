<?php

class User extends coneccio{



    public function compuser($username,$pass){
        $error= 0;
        $userid=0;
        $stmt = $this->conectar()->prepare("SELECT id FROM users WHERE username = ? and password= ? ;");

        if(!$stmt->execute(array($username, $pass))){
            $error=1;
        }
      
        if($stmt->rowCount()>0){

            $res=$stmt->fetchAll();
            $userid= $res[0]["id"]; 
        }

        $result= [
            "error"=>$error,
            "userid"=>$userid
        ];
        $stmt=null;
        return $result;
    }



}

?>