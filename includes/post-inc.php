<?php

require "autoload.controllers.php";
require "autoload.model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
{
    $title = $_POST["posttitle"];
    $text = $_POST["posttext"];
    // $password = $_POST["postimg"];

    $post = new PostControl($title, $text);
    $result = $post->GetPosts();
    $result = $post->AddPost();
}