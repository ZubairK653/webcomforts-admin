<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Karachi'); 
set_time_limit(0);
error_reporting(E_ALL);

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','wc_admindb');
 
class DatabaseConnection
{
    public $conn = false;
    
    public function __construct()
    {
        if(!$this->conn){ 
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

            if($conn->connect_error)
            {
                die ("<h2>Database Connection Failed</h2>");
            }
             
        }
        return $this->conn = $conn;
    }
    // vlaidate form input
    public function  protectData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return mysqli_real_escape_string($this->conn,$data);
      }
}
