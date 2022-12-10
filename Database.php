<?php

class Database{
    //private $dsn;
    private $connection;
    public function __construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

        $this->connection = new PDO($dsn, "root", "password");
    }

    public function query($condition){
        $statement = $this->connection->prepare($condition);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}