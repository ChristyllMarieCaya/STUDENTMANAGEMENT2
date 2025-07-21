<?php
 namespace  Caya\studentManagement\Core;
 use mysqli;

 class Database 
 {

    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'caya_oop2';

        $this->conn = new mysqli($host, $user, $pass, $db);
        if ($this->conn->connect_error)
        {
            die ('Connection to databse failed! : '. $this->conn->connect_error);
        }


    }
 }
?>