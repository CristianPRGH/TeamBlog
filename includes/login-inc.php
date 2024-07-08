<?php

require "autoload.controllers.php";
require "autoload.models.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"]))
{
    // print_r($_POST);
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new UserControl($username, $password);
    $result = $user->CheckLogin();
}