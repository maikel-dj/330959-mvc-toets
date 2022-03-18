<?php

class DataHandler {
    public $conn;

    public function __construct($host = 'localhost', $port = '3306', $dbName = 'mvcframework', $user = 'root', $password = '')
    {
        $this->conn = new PDO("mysql:dbname=$dbName;host=$host:$port", $user, $password);
    }

    public function runSql($sql)
    {
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}