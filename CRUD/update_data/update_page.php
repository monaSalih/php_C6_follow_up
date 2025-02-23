<?php
include('../db_connection/conn.php');
include('../assets/header.php');
// read from student table based on id
// echo "update page";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    // echo $id;
    $query="SELECT * FROM `students` WHERE `student_id`=:id";
    $statment=$conn->prepare($query);
        $statment->bindParam(':id',$id);
        $statment->execute();
        $stud_inf=$statment->fetch(PDO::FETCH_ASSOC);
        // print_r($stud_inf);
}
    else{
        echo "id not set";
    }

?>
<!-- update on student table based on id -->
<?php
if(isset($_POST['update_stud'])){
    // echo "update data";
    $id= $_GET['id'];
     $fname=$_POST['user_fname'];
     $lname=$_POST['user_lname'];
     $email=$_POST['user_email'];
     $dob=$_POST['user_dob'];
     $gender=$_POST['user_gen'];
     $major=$_POST['user_major'];
     $enroll_ye=$_POST['enrol_ye'];
 
    //  echo "fname= $fname, lname=$lname, email=$email, dob=$dob, gender=$gender, major=$major, enroll_ye=$enroll_ye"; 

    $query="UPDATE `students` SET `first_name`=:fname,`last_name`=:lname,`email`=:std_email,`date_of_birth`=:std_dob,`gender`=:std_gen,`major`=:std_ma,`enrollment_year`=:std_en WHERE `student_id`=:std_id";

    $statment=$conn->prepare($query);
    $statment->bindParam(':fname',$fname);
    $statment->bindParam(':lname',$lname);
    $statment->bindParam(':std_email',$email);
    $statment->bindParam(':std_dob',$dob);
    $statment->bindParam(':std_gen',$gender);
    $statment->bindParam(':std_ma',$major);
    $statment->bindParam(':std_en',$enroll_ye);
    $statment->bindParam(':std_id',$id);
    
    $statment->execute();
    header('location:../index.php?message= update sucesssfuly');

    

}
?>

<form action="" method="post">
    <!-- <input type="hidden" name="student_id" value="<?= $stud_inf['student_id']?>"> -->
    <div class="mb-3">
        <label for="user-name" class="col-form-label">User First Name:</label>
        <input type="text" class="form-control" id="user-name" name="user_fname" value="<?= $stud_inf['first_name']?>">
    </div>
    <div class="mb-3">
        <label for="user-name" class="col-form-label">User Last Name:</label>
        <input type="text" class="form-control" id="user-name" name="user_lname" value="<?= $stud_inf['last_name']?>">
    </div>
    <div class="mb-3">
        <label for="user-email" class="col-form-label">User Email:</label>
        <input type="email" class="form-control" id="user-email" name="user_email" value="<?= $stud_inf['email']?>">
    </div>

    <div class="mb-3">
        <label for="user-dob" class="col-form-label">User Date of Birth:</label>
        <input type="text" class="form-control" id="user-dob" name="user_dob" value="<?= $stud_inf['date_of_birth']?>">
    </div>

    <div class="mb-3">
        <label for="user-gender" class="col-form-label">Gender:</label>
        <input type="text" class="form-control" id="user-gen" name="user_gen" value="<?= $stud_inf['gender']?>">
    </div>
    <div class="mb-3">
        <label for="user-major" class="col-form-label">Major:</label>
        <input type="text" class="form-control" id="user-major" name="user_major" value="<?= $stud_inf['major']?>">
    </div>
    <div class="mb-3">
        <label for="user-enrol_ye" class="col-form-label">enrollment_year:</label>
        <input type="text" class="form-control" id="enrol_ye" name="enrol_ye"
            value="<?= $stud_inf['enrollment_year']?>">
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="update_stud" value="Add">
    </div>
</form>

<?php
include('../assets/footer.php');
?>