<?php

require "autoload.controllers.php";
require "autoload.model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new UserControl($username, $password);
    $result = $user->CheckLogin();
}