<?php


class coneccio{


    protected function conectar(){

    
    try {
        //$con = mysqli_connect("localhost","root","","test");
        $con = new PDO('mysql:host=localhost;dbname=teamblog', 'root','');
        return $con;
    } catch (PDOException $e) {
        return "Error!: ". $e->getMessage()."<br>";
    }
}
}

?>