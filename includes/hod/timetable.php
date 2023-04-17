<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Timetable</h1>
        
<br>
<br>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Teachers</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <form action="hod.php?page=timetable" method='post'>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$all_datas = array();
$select_all_timetable_query = "SELECT * FROM timetable WHERE deptId IN (SELECT deptId FROM user_section WHERE role='hod' AND userId = $loginUserId)";
$select_all_timetable_result = mysqli_query($connection, $select_all_timetable_query);
while($row = mysqli_fetch_assoc($select_all_timetable_result)){
    array_push($all_datas, $row['name']);
}
                    ?>
                    <tr>
                        <td>Session 1</td>
                        <td><input type="text" name='mon1' value="<?php echo $all_datas[0]; ?>"></td>
                        <td><input type="text" name='tues1' value="<?php echo $all_datas[1]; ?>"></td>
                        <td><input type="text" name='wed1' value="<?php echo $all_datas[2]; ?>"></td>
                        <td><input type="text" name='thurs1' value="<?php echo $all_datas[3]; ?>"></td>
                        <td><input type="text" name='fri1' value="<?php echo $all_datas[4]; ?>"></td>
                        <td><input type="text" name='sat1' value="<?php echo $all_datas[5]; ?>"></td>
                        <td><input type="text" name='sun1' value="<?php echo $all_datas[6]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 2</td>
                        <td><input type="text" name='mon2' value="<?php echo $all_datas[7]; ?>"></td>
                        <td><input type="text" name='tues2' value="<?php echo $all_datas[8]; ?>"></td>
                        <td><input type="text" name='wed2' value="<?php echo $all_datas[9]; ?>"></td>
                        <td><input type="text" name='thurs2' value="<?php echo $all_datas[10]; ?>"></td>
                        <td><input type="text" name='fri2' value="<?php echo $all_datas[11]; ?>"></td>
                        <td><input type="text" name='sat2' value="<?php echo $all_datas[12]; ?>"></td>
                        <td><input type="text" name='sun2' value="<?php echo $all_datas[13]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 3</td>
                        <td><input type="text" name='mon3' value="<?php echo $all_datas[14]; ?>"></td>
                        <td><input type="text" name='tues3' value="<?php echo $all_datas[15]; ?>"></td>
                        <td><input type="text" name='wed3' value="<?php echo $all_datas[16]; ?>"></td>
                        <td><input type="text" name='thurs3' value="<?php echo $all_datas[17]; ?>"></td>
                        <td><input type="text" name='fri3' value="<?php echo $all_datas[18]; ?>"></td>
                        <td><input type="text" name='sat3' value="<?php echo $all_datas[19]; ?>"></td>
                        <td><input type="text" name='sun3' value="<?php echo $all_datas[20]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 4</td>
                        <td><input type="text" name='mon4' value="<?php echo $all_datas[21]; ?>"></td>
                        <td><input type="text" name='tues4' value="<?php echo $all_datas[22]; ?>"></td>
                        <td><input type="text" name='wed4' value="<?php echo $all_datas[23]; ?>"></td>
                        <td><input type="text" name='thurs4' value="<?php echo $all_datas[24]; ?>"></td>
                        <td><input type="text" name='fri4' value="<?php echo $all_datas[25]; ?>"></td>
                        <td><input type="text" name='sat4' value="<?php echo $all_datas[26]; ?>"></td>
                        <td><input type="text" name='sun4' value="<?php echo $all_datas[27]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 5</td>
                        <td><input type="text" name='mon5' value="<?php echo $all_datas[28]; ?>"></td>
                        <td><input type="text" name='tues5' value="<?php echo $all_datas[29]; ?>"></td>
                        <td><input type="text" name='wed5' value="<?php echo $all_datas[30]; ?>"></td>
                        <td><input type="text" name='thurs5' value="<?php echo $all_datas[31]; ?>"></td>
                        <td><input type="text" name='fri5' value="<?php echo $all_datas[32]; ?>"></td>
                        <td><input type="text" name='sat5' value="<?php echo $all_datas[33]; ?>"></td>
                        <td><input type="text" name='sun5' value="<?php echo $all_datas[34]; ?>"></td>
                    </tr>
                </tbody>
            </table>
            <button type='submit' class='btn btn-primary'>Submit</button>
            </form>

            <?php
if($_POST){
    $mon1 = $_POST['mon1'];
    $mon2 = $_POST['mon2'];
    $mon3 = $_POST['mon3'];
    $mon4 = $_POST['mon4'];
    $mon5 = $_POST['mon5'];

    $tues1 = $_POST['tues1'];
    $tues2 = $_POST['tues2'];
    $tues3 = $_POST['tues3'];
    $tues4 = $_POST['tues4'];
    $tues5 = $_POST['tues5'];

    $wed1 = $_POST['wed1'];
    $wed2 = $_POST['wed2'];
    $wed3 = $_POST['wed3'];
    $wed4 = $_POST['wed4'];
    $wed5 = $_POST['wed5'];

    $thurs1 = $_POST['thurs1'];
    $thurs2 = $_POST['thurs2'];
    $thurs3 = $_POST['thurs3'];
    $thurs4 = $_POST['thurs4'];
    $thurs5 = $_POST['thurs5'];

    $fri1 = $_POST['fri1'];
    $fri2 = $_POST['fri2'];
    $fri3 = $_POST['fri3'];
    $fri4 = $_POST['fri4'];
    $fri5 = $_POST['fri5'];

    $sat1 = $_POST['sat1'];
    $sat2 = $_POST['sat2'];
    $sat3 = $_POST['sat3'];
    $sat4 = $_POST['sat4'];
    $sat5 = $_POST['sat5'];

    $sun1 = $_POST['sun1'];
    $sun2 = $_POST['sun2'];
    $sun3 = $_POST['sun3'];
    $sun4 = $_POST['sun4'];
    $sun5 = $_POST['sun5'];

    $update_timetable_query = "
    UPDATE timetable
SET name = CASE
    WHEN tag = 'mon1' THEN '$mon1'
    WHEN tag = 'mon2' THEN '$mon2'
    WHEN tag = 'mon3' THEN '$mon3'
    WHEN tag = 'mon4' THEN '$mon4'
    WHEN tag = 'mon5' THEN '$mon5'

    WHEN tag = 'tues1' THEN '$tues1'
    WHEN tag = 'tues2' THEN '$tues2'
    WHEN tag = 'tues3' THEN '$tues3'
    WHEN tag = 'tues4' THEN '$tues4'
    WHEN tag = 'tues5' THEN '$tues5'

    WHEN tag = 'wed1' THEN '$wed1'
    WHEN tag = 'wed2' THEN '$wed2'
    WHEN tag = 'wed3' THEN '$wed3'
    WHEN tag = 'wed4' THEN '$wed4'
    WHEN tag = 'wed5' THEN '$wed5'

    WHEN tag = 'thurs1' THEN '$thurs1'
    WHEN tag = 'thurs2' THEN '$thurs2'
    WHEN tag = 'thurs3' THEN '$thurs3'
    WHEN tag = 'thurs4' THEN '$thurs4'
    WHEN tag = 'thurs5' THEN '$thurs5'

    WHEN tag = 'fri1' THEN '$fri1'
    WHEN tag = 'fri2' THEN '$fri2'
    WHEN tag = 'fri3' THEN '$fri3'
    WHEN tag = 'fri4' THEN '$fri4'
    WHEN tag = 'fri5' THEN '$fri5'

    WHEN tag = 'sat1' THEN '$sat1'
    WHEN tag = 'sat2' THEN '$sat2'
    WHEN tag = 'sat3' THEN '$sat3'
    WHEN tag = 'sat4' THEN '$sat4'
    WHEN tag = 'sat5' THEN '$sat5'

    WHEN tag = 'sun1' THEN '$sun1'
    WHEN tag = 'sun2' THEN '$sun2'
    WHEN tag = 'sun3' THEN '$sun3'
    WHEN tag = 'sun4' THEN '$sun4'
    WHEN tag = 'sun5' THEN '$sun5'
END
WHERE tag IN (
    'mon1', 'mon2', 'mon3', 'mon4', 'mon5',
    'tues1', 'tues2', 'tues3', 'tues4', 'tues5',
    'wed1', 'wed2', 'wed3', 'wed4', 'wed5',
    'thurs1', 'thurs2', 'thurs3', 'thurs4', 'thurs5',
    'fri1', 'fri2', 'fri3', 'fri4', 'fri5',
    'sat1', 'sat2', 'sat3', 'sat4', 'sat5',
    'sun1', 'sun2', 'sun3', 'sun4', 'sun5'
) AND deptId IN (SELECT deptId FROM user_section WHERE role='hod' AND userId = $loginUserId);";
    $update_timetable_result = mysqli_query($connection, $update_timetable_query);

    if(!$update_timetable_result){
        echo "Something went wrong";
    }else{
        header('location: hod.php?page=timetable');
    }
}
            ?>
        </div>
    </div>
</div>