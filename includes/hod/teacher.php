<?php
if(isset($_GET['action'])){
    ?>

    <?php
    if($_GET['action'] == 'add_teacher'){
?>
<div class="row">
    <div class="col-lg-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
            </div>
            <div class="card-body">
                <?php
if($_POST) {
    $newName = $_POST['new_name'];
    $newEmail = $_POST['new_email'];
    $newPass = $_POST['new_pass'];

    $select_user_query = "SELECT * FROM users WHERE userEmail = '$newEmail'";
    $select_user_result = mysqli_query($connection, $select_user_query);
    $select_user_rows = mysqli_num_rows($select_user_result);

    if($select_user_rows > 0){
        echo "User with this email already exist";
    }else{
        $insert_teacher_query = "INSERT INTO users (userName, userEmail, userPass) VALUES ('$newName', '$newEmail', '$newPass');";
        $insert_teacher_result = mysqli_query($connection, $insert_teacher_query);

        $user_insert_id = mysqli_insert_id($connection);

        $select_dept_id_query = "SELECT * FROM user_section WHERE role='hod' AND userId = $loginUserId";
        $select_dept_id_result = mysqli_query($connection, $select_dept_id_query);
        $select_dept_id_row = mysqli_fetch_assoc($select_dept_id_result);
        $dept_id = $select_dept_id_row['deptId'];

        $insert_user_section_query = "INSERT INTO user_section (userId, deptId, role) VALUES($user_insert_id, $dept_id, 'teacher')";
        $insert_user_section_result = mysqli_query($connection, $insert_user_section_query);

        if(!$insert_teacher_result){
            echo "Something went wrong (user). Try again";
        }else{
            if(!$insert_user_section_result){
                echo "Something went wrong (user sec). Try again";
            }else{
                header("location: hod.php?page=teacher");
            }
        }
    }
}
                ?>
                <form action="hod.php?page=teacher&action=add_teacher" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="new_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="new_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="new_pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
    ?>

    <?php
if($_GET['action'] == 'delete_teacher' && isset($_GET['id'])){
    $del_id = $_GET['id'];
    $delete_teacher_query = "DELETE FROM user_section WHERE userId = $del_id";
    $delete_teacher_result = mysqli_query($connection, $delete_teacher_query);

    if(!$delete_teacher_result){
        echo "Something Went wrong";
    }else{
        header('location: hod.php?page=teacher');
    }
}
    ?>

    <?php
}
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Teachers</h1>
        <a href="hod.php?page=teacher&action=add_teacher" class="btn btn-primary btn-icon-split">
            <span class="text">Add teacher</span>
        </a>
<br>
<br>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Teachers</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
$sno = 1;
$select_class_teachers_query = "SELECT * FROM users WHERE userId IN (SELECT userId FROM user_section WHERE role='teacher' AND deptId IN (SELECT deptId FROM user_section WHERE role='hod' AND userId = $loginUserId))";
$select_class_teachers_result = mysqli_query($connection, $select_class_teachers_query);
while($row = mysqli_fetch_assoc($select_class_teachers_result)){
    $userId = $row['userId'];
                    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['userName']; ?></td>
                        <td><?php echo $row['userEmail']; ?></td>
                        <td><?php 
                        $select_subjects_query = "SELECT * FROM subject WHERE userId = $userId AND deptId = (SELECT deptId FROM user_section WHERE userId = $userId AND role='teacher')";
                        $select_subjects_result = mysqli_query($connection, $select_subjects_query);
                        while($row2 = mysqli_fetch_assoc($select_subjects_result)){
                            ?>
                            <p><?php echo $row2['subjectName']; ?></p>
                            <?php
                        }
                        ?></td>
                        <td><a href="hod.php?page=teacher&action=delete_teacher&id=<?php echo $userId; ?>">Delete</a></td>
                    </tr>
                    <?php
$sno++;
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>