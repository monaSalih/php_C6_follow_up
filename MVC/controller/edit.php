<?php
// Include necessary files
include('../database/conn.php');
include('../model/student.php');

// Initialize database connection
$db = new Connection();
$conn_db_result = $db->conn_db();

// Check if the update form is submitted
if (isset($_POST['update_stud'])) {
    // Collect form data
    $id = $_POST['student_id'];
    $fname = $_POST['user_fname'];
    $lname = $_POST['user_lname'];
    $email = $_POST['user_email'];
    $dob = $_POST['user_dob'];
    $gender = $_POST['user_gen'];
    $major = $_POST['user_major'];
    $enroll_ye = $_POST['enrol_ye'];

    
    $creat_std = new Student($conn_db_result);

    $data = [
        'student_id' => $id,
        'first_name' => $fname,
        'last_name' => $lname,
        'email' => $email,
        'date_of_birth' => $dob,
        'gender' => $gender,
        'major' => $major,
        'enrollment_year' => $enroll_ye
    ];
    $res_data = $creat_std->update_item($data);
    header('location:../view/index.php');
}
?>
