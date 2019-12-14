<?php

include_once "ConnectDB.php";

class Model extends ConnectDB
{
    public function index($table)
    {
        $data = null;

        $query = "SELECT * FROM $table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

}