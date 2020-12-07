<?php
class Comments {

    private $conn;
    private $table = 'comments';

    CONST STATUS = 0;
    CONST APPROVED = 1;



    public function __construct() {
        $database = new Db();
        $this->conn = $database->connect();
    }

    public function getApprovedComments() {
        $query = 'SELECT * FROM comments WHERE status = '. self::APPROVED;

        //Prepare statement
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        return $stmt;

    }

    public function getComments() {
        $query = 'SELECT * FROM ' . $this->table;

        //Prepare statement
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        return $stmt;

    }

    public function createComment() {


        //Create query
        $query = 'INSERT INTO comments 
                  SET
                    name = :name,
                    email = :email,
                    comment = :comment,
                    status = '. self::STATUS;

        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->comment = htmlspecialchars(strip_tags($this->comment));

        //Bind data

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':comment', $this->comment);


        // Execute query
        if($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;

    }

    public function approveComment($id) {

        $query = 'UPDATE comments 
                  SET
                    status = '. self::APPROVED .'
                  WHERE 
                    id = ' . $id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

    }

    public function deleteComment($id) {

        $query = 'DELETE 
                    FROM comments 
                  WHERE 
                    id = ' . $id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

    }

}