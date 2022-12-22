<?php
include_once "../Util/ConnectDB.php";

class Product {
    private $id;
    private $name;
    private $price;
    private $color;
    private $gb;
    private $describe;
    private $images;
    private $loai_id;
    
    public function __construct($id, $name, $price, $color, $gb, $describe, $images, $loai_id) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
        $this->gb = $gb;
        $this->describe = $describe;
        $this->images = $images;
        $this->loai_id = $loai_id;
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name;}
    public function getPrice() { return $this->price; }
    public function getColor() { return $this->color;}
    public function getDescribe() { return $this->describe;}
    public function getImages() { return $this->images;}
    public function getLoaiId() { return $this->loai_id; }

    public function setId($id) { $this->id = $id; }
    public function setName($name) { $this->name = $name; }
    public function setPrice($price) { $this->price = $price; }
    public function setColor($color) { $this->color = $color; }
    public function setDescribe($describe) { $this->describe = $describe;}
    public function setImages($image) { $this->images = $image;}
    public function setLoaiId($loaiId) { $this->loai_id=$loaiId;}

    public function insertData() {
        $dbCon = new ConnectDb("", "", "", "");
        $data = [
            'name' => $this->name,
            'price' => $this->price,
            'color' => $this->color,
            'describe' => $this->describe,
            'image' => $this->images,
            'loai_id' => $this->loai_id,
        ];
        $sql = "INSERT INTO user(id,name,price,color,describe,image,loai_id) VALUES ('',:name,:price, :color, :describe, :images, :loai_id)";
        $dbCon->insertData($sql, $data);
    }

    public function getAllProduct(){
        $dbCon = new ConnectDb("","","","");
        $query = "SELECT * FROM sanpham";
        $data = $dbCon->getAllData($query);
        $dbCon->disconnected();
        return $data;
    }

    public function getData() {
        $dbCon = new ConnectDb("","","","");
        $sql = "SELECT * FROM sanpham WHERE id=:id";
        $data = ['id' => $this->id];
        return $dbCon->getData($sql, $data);
    }

    public function deleteUser($id) {
        $dbCon = new ConnectDb("","","","");
        $data = [
            'id' => $id
        ];
        $sql = "DELETE FROM sanpham WHERE id=:id";
        $dbCon->deleteData($sql,$data);
    }
}