<?php

namespace App\Model;
use PDO;
use PDOException;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=Commodity_management;charset=utf8';
        $this->user = 'root';
        $this->password = 'Nguyenphuongngan2103@';
    }

    public function connect()
    {
        try {
            $conn =  new PDO($this->dsn,$this->user,$this->password);
            return $conn;
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        return null;
    }

    public function query($statement)
    {
        $stmt = $this->connect()->query($statement);
        return $stmt->fetchAll();
    }

    public function execute($statement)
    {
        $stmt = $this->connect()->prepare($statement);
        $stmt->execute();
    }
}