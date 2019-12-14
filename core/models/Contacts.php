<?php

include_once $_SERVER['DOCUMENT_ROOT']. '/artem/core/Model.php';

class Contacts extends Model
{

    public function insert($data)
    {
        $query = "INSERT INTO contacts 
            (first_name, last_name, email, mobile, tel, address, info) 
            VALUES
            ('$data[firstName]', '$data[lastName]', '$data[email]', '$data[mobile]', '$data[tel]', '$data[address]', '$data[info]')
        ";
        echo $query;
        if ($this->conn->exec($query)) {
            echo "insert success fully";
        } else {
            echo "insert failure";
        }

    }

    public function delete($id)
    {
        $query = "DELETE FROM contacts WHERE id = '$id'";
        if ($conn = $this->conn->exec($query)) {
            return true;
        }
    }

}