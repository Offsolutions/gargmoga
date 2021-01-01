<?php
session_start();
$siteUrl      = "https://localhost/github/OS-NEW/admin/";
$siteUrlMain  = "https://localhost/github/OS-NEW/";
$domainName   = "https://localhost/github/OS-NEW/";
class Database
{

    public $conn;
    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "gargmoga";
        $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (!$this->conn) {
            echo "connection failed !!!";
        }
        // else{
        //     echo "pass";
        // }
    }
}
// $obj = new Database;
