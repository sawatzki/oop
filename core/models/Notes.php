<?php

include_once "../../core/Model.php";

class Notes extends Model
{

    public function create($data)
    {



        return $data;
//        $query = "INSERT INTO notes (title,) VALUES ('$title', '$description')";
//        return "create";
    }

    public function read()
    {

        return "read";
    }

    public function update()
    {

        return "update";
    }

    public function delete($id)
    {
        $query = "DELETE FROM notes WHERE id = '$id'";
        if ($conn = $this->conn->exec($query)) {
            return true;
        }
    }
}