<?php

require "autoload.controllers.php";
require "autoload.models.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"]))
{
    $title = $_POST["title"];
    $text = $_POST["text"];
    // $img = $_POST["postimg"];

    $post = new PostControl($title, $text);
    $post->AddPost();
}