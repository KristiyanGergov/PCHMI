<?php

class Database{

    public $conn;

    public function __construct()
    {
        $configs = include "../config.php";
        $host = 'localhost';
        $db = 'shisha_share';
        $username = 'root';
        $pass = '1234';
        // $host = $configs['host'];
        // $db = $configs['db'];
        // $username = $configs['username'];
        // $pass = $configs['pass'];
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

    function add_item($item){
        try {

            $sql = "SELECT id FROM users
            WHERE username = (:username)";

            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");

            $stmt->bindParam(':username', $item->user);

            $stmt->execute();
            $user_id = $stmt->fetchColumn();

            $sql = "INSERT INTO
            items (name, description, price, available, type, user, image)
            VALUES (:name, :description, :price, :available, :type, :user, :image)";

            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");

            $stmt->bindParam(':name', $item->name);
            $stmt->bindParam(':description', $item->description);
            $stmt->bindParam(':price', $item->price);
            $stmt->bindParam(':available', $item->available);
            $stmt->bindParam(':type', $item->type);
            $stmt->bindParam(':user', $user_id);
            $stmt->bindParam(':image', $item->image);

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

    function get_items($type, $page){
        try {
            $sql = "SELECT * from items
            WHERE type = (:type)";

            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");
            $stmt->bindParam(':type', $type);
            $stmt->execute();

            // $result = $stmt->get_result();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($result);

            $rows = array();
            while ($row = $result->fetch_assoc()){
               // $item = new Item($row['name'], $row['description'], $row['price'], $row['available'], $row['type'], $row['user'], $row['image']);
                $rows[] = $row;
            }
            return $rows;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>
