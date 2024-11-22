<?php
    // require_once("User.php");

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];

    //     $user = new User();
        
    //     if($user->register($username, $password)){
    //         echo "Registration Successfully";            
    //     }
    //     else{
    //         echo "Registration Failed";
    //     }
    // }


require_once("User.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $user = new User();

        try {
            if ($user->register($username, $password)) {
                echo "Registration Successful";
            } else {
                echo "Registration Failed";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Username and Password cannot be empty.";
    }
}
?>
