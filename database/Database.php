<?php

class Database{
    
    public $conn;

    public function __construct()
    {
        $configs = include "./config.php";
        $host = $configs['host'];
        $db = $configs['db'];
        $username = $configs['username'];
        $pass = $configs['pass'];   
        $this->conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $username, $pass);
    }

    function add_user($user)
    {

        try {
            $sql = "INSERT INTO
            users (username, pass, email)
            VALUES (:username, :pass, :email)";
            
            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");

            $stmt->bindParam(':username', $user->username);
            $stmt->bindParam(':pass', $user->password);
            $stmt->bindParam(':email', $user->email);

            $stmt->execute();
            echo "Record added successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function get_pass_from_user($username){

        try {
            $sql = "SELECT pass FROM users
            WHERE username = (:username)";
            
            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");

            $stmt->bindParam(':username', $username);

            $stmt->execute();
            $pass = $stmt->fetchColumn();
            return $pass;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>