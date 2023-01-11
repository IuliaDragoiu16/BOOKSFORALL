<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = DB_SERVER;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = mysqli_connect('localhost','root','','book_shop_db');
            // $conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    // public function __destruct(){
    //     $this->conn->close();
    // }
}
?>