<?php
include ("Database.php");
class User{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    # sign up
    public function register($username, $password){
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $passwordHash);

        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    
    # login
    public function login($username, $password){
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($passwordHash);
        $stmt->fetch();
        $stmt->close();
        if(password_verify($password, $passwordHash)) {
            return true;
        }
        else{
            return false;
        }
    }
}
?>