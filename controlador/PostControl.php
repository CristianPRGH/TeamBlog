<?php

class PostControl extends Post{
    private $title;
    private $text;
    private $img;

    public function __construct($title = "", $text = "", $img = "")
    {
        $this->title = $title;
        $this->text = $text;
        $this->img = $img;
    }

    public function AddPost()
    {
        if ($this->Validaciones())
        {
            header("Location: ../vista/PostVista.php?error=EmptyFields");
        }
        
        $result = parent::addPosts($this->title, $this->text, $this->img);
        if ($result == 0)
        {
            header("Location: ../vista/HomeVista.php");
        }else{
            header("Location: ../vista/PostVista.php?error=AddPostError");
        }
    }

    public function GetPosts()
    {
        $result = parent::getAllPost();
        return $result;
    }
    
    private function Validaciones()
    {
        if (empty($title) || empty($text))
        {
            return true;
        }

        return false;
    }
}