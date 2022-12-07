<?php
class ConnectDb{
    private $servername = "";
    private $username = "";
    private $password = "";
    private $dbname = "";

    public function __construct($servername, $username, $password, $dbname){
        if($servername){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }else{
            $this->servername = "localhost";
            $this->username ="root";
            $this->password ="";
            $this->dbname = "dbIphone";
        }
    }

    public function connect(){
        try{
            $conn = new PDO('mysql:host='.$this->servername.';dbname='.$this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function disconnected() {
        $this->conn = null;
    }
    public function insertData($sql,$data=array()) {
        $dbCon = new ConnectDb("","","","");
        $pdo = $dbCon->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        $dbCon->disconnected();
    }
    
    public function getData($sql,$data=array()) {
        $dbCon = new ConnectDb("","","","");
        $pdo = $dbCon->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        $user = $stmt->fetch();
        $dbCon->disconnected();
        return $user;
    }
    
     public function deleteData($sql,$data=array()) {
        $dbCon = new ConnectDb("","","","");
        $pdo = $dbCon->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        $dbCon->disconnected();
    }
}