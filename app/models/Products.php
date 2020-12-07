<?php

class Products {

    private $conn;
    private $table = 'products';



    public function __construct() {
        $database = new Db();
        $this->conn = $database->connect();
    }

    public function getProducts() {

        $query = 'SELECT * FROM ' . $this->table;

        //Prepare statement
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        return $stmt;
    }

}