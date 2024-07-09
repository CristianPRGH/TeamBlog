<?php

require "autoload.controllers.php";
require "autoload.models.php";

$post = new PostControl();
$result = $post->GetPosts();