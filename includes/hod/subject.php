<?php
if(isset($_GET['action'])){
    ?>

    <?php
    if($_GET['action'] == 'add_subject'){
?>
<div class="row">
    <div class="col-lg-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Subject</h6>
            </div>
            <div class="card-body">
                <?php
if($_POST) {
    $newSubjectName = $_POST['new_subject_name'];
    $teacherId = $_POST['teacher_id'];

    $select_subject_query = "SELECT * FROM subject WHERE subjectName = '$newSubjectName' AND deptId IN (SELECT deptId FROM user_section WHERE role='hod' AND userId = $loginUserId)";
    $select_subject_result = mysqli_query($connection, $select_subject_query);
    $select_subject_rows = mysqli_num_rows($select_subject_result);

    if($select_subject_rows > 0){
        echo "This subject is already exists";
    }else{
        $insert_subject_query = "INSERT INTO subject (subjectName, deptId, userId) VALUES('$newSubjectName', (SELECT deptId FROM user_section WHERE role='hod' AND userId = $loginUserId), $teacherId)";
        $insert_subject_result = mysqli_query($connection, $insert_subject_query);

        if(!$insert_subject_result){
            echo "Something went wrong";
        }else{
            header('location: hod.php?page=subject');
        }
    }
}
                ?>
                <form action="hod.php?page=subject&action=add_subject" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject Name</label>
                        <input type="text" name="new_subject_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Teacher</label>
                        <select name="teacher_id" class="form-control">
                            <?php
$select_all_teacher_query = "SELECT * FROM users WHERE userId IN (SELECT userId FROM user_section WHERE role='teacher' AND deptId IN (SELECT deptId FROM user_section WHERE userId = $loginUserId AND role='hod'))";
$select_all_teacher_result = mysqli_query($connection, $select_all_teacher_query);
while($row = mysqli_fetch_assoc($select_all_teacher_result)){
                            ?>
                            <option value="<?php echo $row['userId']; ?>"><?php echo $row['userName']; ?></option>
                            <?php
}
                            ?>
                        </select>
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
if($_GET['action'] == 'delete_subject' && isset($_GET['id'])){
    $del_id = $_GET['id'];
    $delete_subject_query = "DELETE FROM subject WHERE subjectId = $del_id";
    $delete_subject_result = mysqli_query($connection, $delete_subject_query);

    if(!$delete_subject_result){
        echo "Something Went wrong";
    }else{
        header('location: hod.php?page=subject');
    }
}
?>

    <?php
}
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Subjects</h1>
        <a href="hod.php?page=subject&action=add_subject" class="btn btn-primary btn-icon-split">
            <span class="text">Add subject</span>
        </a>
<br>
<br>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Subjects</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Teacher Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Teacher Name</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
$sno = 1;
$select_subject_query = "SELECT * FROM subject WHERE deptId IN (SELECT deptId FROM user_section WHERE role='hod' AND userId = $loginUserId)";
$select_subject_result = mysqli_query($connection, $select_subject_query);
while($row = mysqli_fetch_assoc($select_subject_result)){
    $userId = $row['userId'];
                    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['subjectName']; ?></td>
                        <td>
                            <?php
$select_teacher_name_query = "SELECT * FROM users WHERE userId = $userId";
$select_teacher_name_result = mysqli_query($connection, $select_teacher_name_query);
$select_teacher_name_row = mysqli_fetch_assoc($select_teacher_name_result);
echo $select_teacher_name_row['userName'];
                            ?>
                        </td>
                        <td><a href='hod.php?page=subject&action=delete_subject&id=<?php echo $row['subjectId']; ?>'>Delete</a></td>
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