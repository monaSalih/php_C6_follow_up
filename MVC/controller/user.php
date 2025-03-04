<?php
// echo "test";
include('../database/conn.php');
include('../model/student.php');

$db=new Connection();
$conn_db_result=$db->conn_db();
// var_dump($conn_db_result);
if(isset($_POST['add_student'])){
    // echo " insert data";
    $fname=$_POST['user_fname'];
    $lname=$_POST['user_lname'];
    $email=$_POST['user_email'];
    $dob=$_POST['user_dob'];
    $gender=$_POST['user_gen'];
    $major=$_POST['user_major'];
    $enroll_ye=$_POST['enrol_ye'];

    // assoc_ array
    $data=[
        'first_name'=>$fname,
        'last_name'=>$lname,
        'email'=>$email,
        'dob'=>$dob,
        'std_gen'=>$gender,
        'std_maj'=>$major,
        'std_enr'=>$enroll_ye,
    ];
    $creat_std=new Student($conn_db_result);
    $res_data= $creat_std->create_new_std($data);
    // echo ($res_data);

   
    header('location:../view/index.php');



}else{
    echo "not insert data";
}
?>
