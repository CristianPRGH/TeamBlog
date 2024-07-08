<?php

require "autoload.controllers.php";
require "autoload.models.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
{
    $title = $_POST["posttitle"];
    $text = $_POST["posttext"];
    // $img = $_POST["postimg"];

    $post = new PostControl($title, $text);
    $result = $post->AddPost();
}