<?php
include_once "../Util/ConnectDB.php";

class Category
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function __destruct()
    {
        $this->id = "";
        $this->name = "";
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function get()
    {
        $dbConn = new ConnectDb('', '', '', '');
        $sql = "select * from categories where id = :id";
        $data = [
            ':id' => $this->id
        ];
        return $dbConn->getData($sql, $data);
    }

    public function getAll()
    {
        $dbConn = new ConnectDB('', '', '', '');
        $sql = "select * from categories";
        return $dbConn->getAllData($sql);
    }

    public function insert()
    {
        $dbConn = new ConnectDB('', '', '', '');
        $sql = "insert into categories(id, name) values(:id, :name)";
        $data = [
            ':id' => $this->id,
            ':name' => $this->name
        ];
        return $dbConn->insertData($sql, $data);
    }

    public function delete()
    {
        $dbConn = new ConnectDB('', '', '', '');
        $sql = "delete from categories where id = :id";
        $data = [
            ':id' => $this->id,
        ];
        return $dbConn->deleteData($sql, $data);
    }

    public function update()
    {
        $dbConn = new ConnectDB('', '', '', '');
        $sql = "update categories set name = :name where id = :id";
        $data = [
            ':name' => $this->name,
            ':id' => $this->id
        ];
        return $dbConn->update($sql, $data);
    }
}