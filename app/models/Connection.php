<?php

class Connection{
    // public $host = "";
    // public $db_username = "";
    // public $db_passowrd = "";
    public function __construct(){
    }
    public function connect($db = "ssit"){
        $host = DB_HOST;
        $db_username = DB_USER;
        $db_password = DB_PASS;
        $conn = mysqli_connect($host,$db_username,$db_password,$db);
        return $conn;
    }
}