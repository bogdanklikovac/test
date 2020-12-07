<?php
    class User {

        private $conn;
        private $table = 'users';



        public function __construct() {
            $database = new Db();
            $this->conn = $database->connect();
        }

        public function createUser() {

            //Create query
            $query = 'INSERT INTO users 
                  SET
                    username = :username,
                    email = :email,
                    password = :password';

            $stmt = $this->conn->prepare($query);

            $this->username = htmlspecialchars(strip_tags($this->username));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = htmlspecialchars(strip_tags($this->password));

            //Bind data

            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);


            // Execute query
            if($stmt->execute()) {
                return true;
            }

            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt->error);

            return false;

        }

        public function login() {
            $query = 'SELECT * FROM users
                WHERE 
                    username = :username
                AND
                    password = :password';

            //Prepare statement
            $stmt = $this->conn->prepare($query);

            $this->username = htmlspecialchars(strip_tags($this->username));
            $this->password = htmlspecialchars(strip_tags($this->password));

            //Bind data

            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':password', $this->password);


            //Execute query
            $stmt->execute();

            return $stmt;
        }


    }