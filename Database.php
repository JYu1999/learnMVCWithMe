<?php

class Database{
    //private $dsn;
    private $connection;
    public function __construct($config, $username = 'root', $password = 'password'){
       // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
        $dsn = http_build_query($config, '', ';');
        $dsn = "mysql:$dsn";
        //dd($dsn);
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params=[]){
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}