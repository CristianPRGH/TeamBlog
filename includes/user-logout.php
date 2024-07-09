<?php

require "autoload.controllers.php";
require "autoload.models.php";

$user = new UserControl();
$user->Logout();