<?php


/*

Explanation of singleton pattern in php 


*/


class Database
{
    private static $instance;
    private $servername = 'localhost';
    private $dbname = 'myownmvc';
    private $username='root';
    private $password='root';

    private function __construct()
    {
        $conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}",$this->username,$this->password);     
    }

    public static function singleton()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}

$user1 = Database::Singleton();

?>