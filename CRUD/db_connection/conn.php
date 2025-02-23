<?php
$host="localhost";
$dbname="dp_task";
$username="root";
$password="";
$dsn="mysql:host=$host;dbname=$dbname";
try{
    $conn =new PDO($dsn,$username,$password);
    // echo "connect";

}catch(PDOException $e){
    // echo $e->getMessage();
    echo $e->getCode();
}
?>