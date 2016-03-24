<?php
  
class DBConnection
{  
    
    private $host = 'localhost';
    private $user = 'user';
    private $pass = 'password'; 
   
    public static $instance;

    private function __construct(){}

    public static function getInstance()
    {
	if(!isset(self::$instance)){
	    self::$instance = new DatabaseConnection($this->host,$this->user,$this->pass);
	}	
	return self::$instance;
    }   
    
}

class Users
{  
    public function __construct(){}  

    public function getUserList()
    {
	$dbconn = DBConnection::getInstance();	
	$results = $dbconn->query('select name from user');
	sort($results);
	return $results;
    }
}

$users = new Users;
$users->getUserList();
