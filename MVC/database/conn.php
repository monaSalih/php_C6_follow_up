<?php

class Connection {
    private $host="localhost";
    private $dbname="dp_task";
    private $username="root";
    private $password="";
    private $sdn;
    private $conn;

public function conn_db(){
    try{
        $this->sdn="mysql:host=$this->host;dbname=$this->dbname";
        $this->conn =new PDO($this->sdn,$this->username,$this->password);
        return $this->conn;
    
    }catch(PDOException $e){
        // echo $e->getMessage();
        echo $e->getCode();
    }
}

}


// $dsn="mysql:host=$host;dbname=$dbname";

?>