<?php
include ('../database/conn.php');
include ('../Model/student.php');
echo "hello update";
echo $_GET['id'];
$db = new Connection();
$conn_db = $db->conn_db();
$id=$_GET['id'];
$student = new Student($conn_db);
$stud_inf=$student->id_read_data($id);
print_r($stud_inf['first_name']);

?>

<form action="../controller/edit.php" method="post">
    <input type="hidden" name="student_id" value="<?= $stud_inf['student_id']?>">
    <div class="mb-3">
        <label for="user-name" class="col-form-label">User First Name:</label>
        <input type="text" class="form-control" id="user-name" name="user_fname" value="<?=  $stud_inf['first_name']?>">
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
