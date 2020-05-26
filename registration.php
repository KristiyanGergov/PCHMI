<?php

include "./User.php";
include "./validation.php";

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

            $stmt->bindParam(':user', $user->username);
            $stmt->bindParam(':password', $user->password);
            $stmt->bindParam(':email', $user->email);

            $stmt->execute();
            echo "Record added successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

function init()
{
    if ($_SERVER["REQUEST_METHOD"] != "POST")
    {
        return;
    }

    $fields = extract_variables();
    $username = $fields['username'];
    $password = $fields['password'];
    $email = $fields['email'];

    $user = new User(
        $username,
        $password,
        $email
    );
    
    $database = new Database();
    $database->add_user($user);
}

init();

?>