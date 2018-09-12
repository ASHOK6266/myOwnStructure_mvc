<?php


/*

Explanation of singleton pattern in php .

*Singleteon restricts the instantiation of the class 

*Singleteon pattern used so that the application is faster 

//$user1 = Database::Singleton();
//$user2 = Database::Singleton();
//$user3 = Database::Singleton();

Consider different objects instantiating same class

No matter how any times the object is created as we are using Singleteon pattern 
the public function singleton checks if the instance exists or not. if the instance exist 
it returns the self::$instance. If instance does not exist it creates a new instance.

*/


class Database extends PDO
{
    private $conn;

    private static $instance;
    private $servername = 'localhost';
    private $dbname = ''; // Your database name
    private $username=''; //Your username for mysql something like root
    private $password=''; //your mysql password

    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}",$this->username,$this->password);     
    }

    public static function singleton()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function get_connection()
    {
        return $this->conn;
    }
}



?>