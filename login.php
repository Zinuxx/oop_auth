<?php
require_once("User.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user = new User();

    if($user->login($username,$password)){
        echo "Login Successfully";
    }
    else{
        echo "Login Failed";
    }
}
?>    