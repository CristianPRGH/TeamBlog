<?php

class PostControl extends Post{
    private $title;
    private $text;
    //private $img;

    public function __construct($title = "", $text = "")
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function AddPost()
    {
        $result = parent::addPosts($this->title, $this->text);
        if ($result == 0)
        {
            header("Location: ../vista/HomeVista.php");
        }else{
            header("Location: ../vista/PostVista.php?error=AddError");
        }
    }

    public function GetPosts()
    {
        $result = parent::getAllPost();
        return $result;
    }
}