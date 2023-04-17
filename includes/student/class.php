<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Class Students</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Students</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
$sno = 1;
$select_class_students_query = "SELECT * FROM users WHERE userId IN (SELECT userId FROM user_section WHERE role='student' AND deptId = (SELECT deptId FROM user_section WHERE userId = $loginUserId))";
$select_class_students_result = mysqli_query($connection, $select_class_students_query);
while($row = mysqli_fetch_assoc($select_class_students_result)){
                    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['userName']; ?></td>
                        <td><?php echo $row['userEmail']; ?></td>
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