<?php
// echo "inser page ";
include('../db_connection/conn.php');

if(isset($_POST['add_student'])){
    // echo " insert data";
    $fname=$_POST['user_fname'];
    $lname=$_POST['user_lname'];
    $email=$_POST['user_email'];
    $dob=$_POST['user_dob'];
    $gender=$_POST['user_gen'];
    $major=$_POST['user_major'];
    $enroll_ye=$_POST['enrol_ye'];

    // echo "fname= $fname, lname=$lname, email=$email, dob=$dob, gender=$gender, major=$major, enroll_ye=$enroll_ye"; 
    $query="INSERT INTO `students`(`first_name`, `last_name`, `email`, `date_of_birth`, `gender`, `major`, `enrollment_year`) VALUES (:first_name,:last_name,:email,:dob,:std_gen,:std_maj,:std_enr)";
    $statment=$conn->prepare($query);
    $data=[
        'first_name'=>$fname,
        'last_name'=>$lname,
        'email'=>$email,
        'dob'=>$dob,
        'std_gen'=>$gender,
        'std_maj'=>$major,
        'std_enr'=>$enroll_ye,
    ];
    $statment->execute($data);
    header('location:../index.php?message=add sucesssfuly');



}else{
    echo "not insert data";
}
?>