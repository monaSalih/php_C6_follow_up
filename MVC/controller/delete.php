<?php
include('../database/conn.php');
include('../model/student.php');

$db=new Connection();
$conn_db_result=$db->conn_db();
// echo $_GET['id'];
if(isset($_GET['id'])){
    $id= $_GET['id'];
     try{
        $creat_std=new Student($conn_db_result);
        $res_data= $creat_std->delete_item($id);


        //  $query="DELETE FROM `students` WHERE `student_id`=:std_id";
        //  $statment=$conn->prepare($query);
        //  $statment->bindParam(':std_id',$id);
        //  $statment->execute();
        header('location:../view/index.php');
 
 
 
     }catch(PDOEception $err){
         echo $err->getMessage();
     }
 }
?>
