<?php

class Database{

    public $conn;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'shisha_share';
        $username = 'root';
        $pass = '';
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

            $rows = array();
            while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
            }
            return $rows;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function get_user_items($user){
        try {

            $sql = "SELECT id FROM users
            WHERE username = (:username)";

            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");

            $stmt->bindParam(':username', $user);

            $stmt->execute();
            $user_id = $stmt->fetchColumn();

            $sql = "SELECT * from items
            WHERE user = (:user)";

            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");
            $stmt->bindParam(':user', $user_id);
            $stmt->execute();

            $rows = array();
            while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
            }
            return $rows;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function delete_item($id){
        try {
            $sql = "DELETE from items
             WHERE id = (:id)";

            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function get_item($id) {
        try {
            $sql = "SELECT * from items
            WHERE id = (:id)";

            $stmt = $this->conn->prepare($sql) or die("Praparing sql statement failed.");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $rows = array();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>
