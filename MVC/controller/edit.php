<?php
// echo "update page";
include('../database/conn.php');
include('../model/student.php');

$db=new Connection();
$conn_db_result=$db->conn_db();
if(isset($_POST['update_stud'])){
    // echo "update data";
    $id= $_POST['student_id'];
     $fname=$_POST['user_fname'];
     $lname=$_POST['user_lname'];
     $email=$_POST['user_email'];
     $dob=$_POST['user_dob'];
     $gender=$_POST['user_gen'];
     $major=$_POST['user_major'];
     $enroll_ye=$_POST['enrol_ye'];
     $creat_std=new Student($conn_db_result);
     echo "id=$id,fname= $fname, lname=$lname, email=$email, dob=$dob, gender=$gender, major=$major, enroll_ye=$enroll_ye"; 

    // $query="UPDATE `students` SET `first_name`=:fname,`last_name`=:lname,`email`=:std_email,`date_of_birth`=:std_dob,`gender`=:std_gen,`major`=:std_ma,`enrollment_year`=:std_en WHERE `student_id`=:std_id";

    // $statment=$conn->prepare($query);
    // $statment->bindParam(':fname',$fname);
    // $statment->bindParam(':lname',$lname);
    // $statment->bindParam(':std_email',$email);
    // $statment->bindParam(':std_dob',$dob);
    // $statment->bindParam(':std_gen',$gender);
    // $statment->bindParam(':std_ma',$major);
    // $statment->bindParam(':std_en',$enroll_ye);
    // $statment->bindParam(':std_id',$id);
    
    // $statment->execute();
}

?>