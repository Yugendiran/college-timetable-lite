<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Teachers</h1>

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
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
$sno = 1;
$select_class_teachers_query = "SELECT * FROM users WHERE userId IN (SELECT userId FROM user_section WHERE role='teacher' AND sectionId = (SELECT sectionId FROM user_section WHERE userId = $isLoggedId))";
$select_class_teachers_result = mysqli_query($connection, $select_class_teachers_query);
while($row = mysqli_fetch_assoc($select_class_teachers_result)){
    $userId = $row['userId'];
                    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['userName']; ?></td>
                        <td><?php echo $row['userEmail']; ?></td>
                        <td><?php 
                        $select_subjects_query = "SELECT * FROM subject WHERE userId = $userId AND deptId = (SELECT deptId FROM section WHERE sectionId = (SELECT sectionId FROM user_section WHERE userId = $userId AND role='teacher'))";
                        $select_subjects_result = mysqli_query($connection, $select_subjects_query);
                        while($row2 = mysqli_fetch_assoc($select_subjects_result)){
                            ?>
                            <p><?php echo $row2['subjectName']; ?></p>
                            <?php
                        }
                        ?></td>
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