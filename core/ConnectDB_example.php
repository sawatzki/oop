<?php

class ConnectDB
{
    protected $host = '';
    protected $user = '';
    protected $password = '';
    protected $db = '';
    protected $conn = null;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password) or die('Keine Verbindung mit Datenbank');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}