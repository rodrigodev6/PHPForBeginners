<?php

use PDO;
class Database
{
    public $connection;
    public function __construct()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=myapp;user=root;charset=utf8';
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}