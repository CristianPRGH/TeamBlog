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
        // $result = parent::AddNewPost($title, $text);
        // return $result;
    }

    public function GetPosts()
    {
        $result = parent::getAllPost();
        return $result;
    }
}