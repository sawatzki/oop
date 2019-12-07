<?php

class Model{

    private $server = "localhost";
    private $userName = "root";
    private $password = "";
    private $db = "oop_crud";
    private $conn = "";

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->userName, $this->password, $this->db);
        }catch (Exception $e){
            echo "Connection failed::: " .$e->getMessage();
        }
    }

}