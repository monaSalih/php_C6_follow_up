<?php
include('./layout/header.php');
include('../database/conn.php');
include('../model/student.php');

// if(isset($_GET['message'])){
//   echo "<div style='background-color:green'> {$_GET['message']}</div>";
// }
?>

<main>
    


    <h1>Student Information</h1>
    <!-- FIX: Updated data attributes for Bootstrap 5 -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Student
    </button>

    <div class="container mt-5">
        <table class="table table-striped table-hover table-bordered border-primary">
            <thead>
                <tr>
                    <!-- <th scope="col">id</th> -->
                    <th scope="col">User Name</th>
                    <th scope="col">User Email</th>
                    <th scope="col">User Date of Birth</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Major</th>
                    <th class="text-center">Enrollment year</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $db=new Connection();
              $conn_db_result=$db->conn_db();
            //   var_dump($conn_db_result);
            $student=new Student($conn_db_result);
            $users=$student->read_data();
            // print_r($users);
                
                foreach($users as $user){
                  echo "<tr>
                  <td>{$user['first_name']} {$user['last_name']}</td>
                  <td> {$user['email']}</td>
                  <td> {$user['date_of_birth']}</td>
                  <td> {$user['gender']}</td>
                  <td> {$user['major']}</td>
                  <td> {$user['enrollment_year']}</td>
                  <td><a href='../controller/delete.php?id={$user['student_id']}'>delete</a>
                  <a href='./update_page.php?id={$user['student_id']}'>edit</a>
                  </td>

                  </tr>";
                }
              ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Student</h5>
                    <!-- FIX: Bootstrap 5 requires 'btn-close' instead of 'close' -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../controller/user.php" method="post">
                        <div class="mb-3">
                            <label for="user-name" class="col-form-label">User First Name:</label>
                            <input type="text" class="form-control" id="user-name" name="user_fname">
                        </div>
                        <div class="mb-3">
                            <label for="user-name" class="col-form-label">User Last Name:</label>
                            <input type="text" class="form-control" id="user-name" name="user_lname">
                        </div>

                        <div class="mb-3">
                            <label for="user-email" class="col-form-label">User Email:</label>
                            <input type="email" class="form-control" id="user-email" name="user_email">
                        </div>

                        <div class="mb-3">
                            <label for="user-dob" class="col-form-label">User Date of Birth:</label>
                            <input type="text" class="form-control" id="user-dob" name="user_dob">
                        </div>

                        <div class="mb-3">
                            <label for="user-gender" class="col-form-label">Gender:</label>
                            <input type="text" class="form-control" id="user-gen" name="user_gen">
                        </div>

                        <div class="mb-3">
                            <label for="user-major" class="col-form-label">Major:</label>
                            <input type="text" class="form-control" id="user-major" name="user_major">
                        </div>
                        <div class="mb-3">
                            <label for="user-enrol_ye" class="col-form-label">enrollment_year:</label>
                            <input type="text" class="form-control" id="enrol_ye" name="enrol_ye" >
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" name="add_student" value="Add">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</main>


<?php
include('./layout/footer.php');

?>