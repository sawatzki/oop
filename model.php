<?php

Class Model
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'oop_crud';
    private $conn = null;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        } catch (PDOException $e) {
            echo "connection failed: " . $e->getMessage();
        }
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['title']) && isset($_POST['description'])) {
                if (!empty($_POST['title']) && !empty($_POST['description'])) {
                    $title = $_POST['title'];
                    $description = $_POST['description'];

                    $query = "INSERT INTO notes (title, description) VALUES ('$title', '$description')";

                    if ($sql = $this->conn->exec($query)) {
                        echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>note added successfully</strong>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    ";
                    } else {
                        echo "
                    <div class='alert alert-error alert-dismissible fade show' role='alert'>
                      <strong>failed to add note</strong>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    ";
                    }

                } else {
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>empty fields</strong>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    ";
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;

        $stmt = $this->conn->prepare("SELECT * FROM notes");
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    public function delete($id)
    {

        $query = "DELETE FROM notes WHERE id = '$id'";

        if ($conn = $this->conn->exec($query)) {
            echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>note delete successfully</strong>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                ";
        } else {
            echo "
                <div class='alert alert-error alert-dismissible fade show' role='alert'>
                  <strong>note not delete</strong>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                ";
        }

    }

    public function read($id)
    {
        $data = null;
        $query = "SELECT * FROM notes WHERE id = '$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function edit($id)
    {
        $data = null;
        $query = "SELECT * FROM notes WHERE id = '$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function update($data){
        if(isset($data['update'])){

            if(isset($data['title']) && isset($data['description'])){
                if(!empty($data['title']) && !empty($data['description'])){

                    $title = $data['title'];
                    $description = $data['description'];
                    $id = $data['id'];

                    $query = "UPDATE notes SET title='$title', description='$description' WHERE id='$id'";
                    if($sql = $this->conn->exec($query)){
                        echo "
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                              <strong>Note update successfully</strong>
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>
                        ";
                    }else{
                        echo "
                            <div class='alert alert-error alert-dismissible fade show' role='alert'>
                              <strong>Failed to update note</strong>
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>
                        ";
                    }

                    return true;
                }

            }

        }



    }

}