<?php
session_start();

class UserControl extends User{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function CheckLogin()
    {
        $result = parent::compuser($this->username, $this->password);

        // print_r($result);
        
        if ($result["error"] == 0)
        {
            $_SESSION["userid"] = $result["userid"];
            $_SESSION["username"] = $this->username;
            header("Location: ../vista/HomeVista.php");
        }
        else {
            header("Location: ../vista/LoginVista.php?error=UserPassNotvalid");
        }
    }
}