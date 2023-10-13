<?php

class DBConnect {
    private $conn;
    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_management_system";
        
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function usernameQuery($username){
        $sql = 'SELECT username FROM user WHERE username = "' . $username . '"';
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function emailQuery($email){
        $sql = 'SELECT email FROM user WHERE email = "' . $email . '"';
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function createUser($username, $password, $email, $role){
        $sql = "INSERT INTO user (username, password, email, role) VALUES ('" . $username . "', '" . password_hash($password, PASSWORD_DEFAULT) . "', '" . $email . "', '" . $role . "')";
        if ($this->conn->query($sql) === TRUE) {
            // echo "New record created successfully";
        } else {
            // echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
        
    }

    public function checkPassword($email, $password){
        $sql = 'SELECT email, password FROM user WHERE email = "' . $email . '"';
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])){
            return true;
        }
        return false;
    }

    public function getUserInfo($email){
        $sql = 'SELECT role, username, email FROM user WHERE email = "' . $email . '"';
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
}
?>