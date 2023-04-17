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
$select_all_timetable_query = "SELECT * FROM timetable WHERE deptId IN (SELECT deptId FROM user_section WHERE role='teacher' AND userId = $loginUserId)";
$select_all_timetable_result = mysqli_query($connection, $select_all_timetable_query);
while($row = mysqli_fetch_assoc($select_all_timetable_result)){
    array_push($all_datas, $row['name']);
}
                    ?>
                    <tr>
                        <td>Session 1</td>
                        <td><input type="text" name='mon1' disabled value="<?php echo $all_datas[0]; ?>"></td>
                        <td><input type="text" name='tues1' disabled value="<?php echo $all_datas[1]; ?>"></td>
                        <td><input type="text" name='wed1' disabled value="<?php echo $all_datas[2]; ?>"></td>
                        <td><input type="text" name='thurs1' disabled value="<?php echo $all_datas[3]; ?>"></td>
                        <td><input type="text" name='fri1' disabled value="<?php echo $all_datas[4]; ?>"></td>
                        <td><input type="text" name='sat1' disabled value="<?php echo $all_datas[5]; ?>"></td>
                        <td><input type="text" name='sun1' disabled value="<?php echo $all_datas[6]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 2</td>
                        <td><input type="text" name='mon2' disabled value="<?php echo $all_datas[7]; ?>"></td>
                        <td><input type="text" name='tues2' disabled value="<?php echo $all_datas[8]; ?>"></td>
                        <td><input type="text" name='wed2' disabled value="<?php echo $all_datas[9]; ?>"></td>
                        <td><input type="text" name='thurs2' disabled value="<?php echo $all_datas[10]; ?>"></td>
                        <td><input type="text" name='fri2' disabled value="<?php echo $all_datas[11]; ?>"></td>
                        <td><input type="text" name='sat2' disabled value="<?php echo $all_datas[12]; ?>"></td>
                        <td><input type="text" name='sun2' disabled value="<?php echo $all_datas[13]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 3</td>
                        <td><input type="text" name='mon3' disabled value="<?php echo $all_datas[14]; ?>"></td>
                        <td><input type="text" name='tues3' disabled value="<?php echo $all_datas[15]; ?>"></td>
                        <td><input type="text" name='wed3' disabled value="<?php echo $all_datas[16]; ?>"></td>
                        <td><input type="text" name='thurs3' disabled value="<?php echo $all_datas[17]; ?>"></td>
                        <td><input type="text" name='fri3' disabled value="<?php echo $all_datas[18]; ?>"></td>
                        <td><input type="text" name='sat3' disabled value="<?php echo $all_datas[19]; ?>"></td>
                        <td><input type="text" name='sun3' disabled value="<?php echo $all_datas[20]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 4</td>
                        <td><input type="text" name='mon4' disabled value="<?php echo $all_datas[21]; ?>"></td>
                        <td><input type="text" name='tues4' disabled value="<?php echo $all_datas[22]; ?>"></td>
                        <td><input type="text" name='wed4' disabled value="<?php echo $all_datas[23]; ?>"></td>
                        <td><input type="text" name='thurs4' disabled value="<?php echo $all_datas[24]; ?>"></td>
                        <td><input type="text" name='fri4' disabled value="<?php echo $all_datas[25]; ?>"></td>
                        <td><input type="text" name='sat4' disabled value="<?php echo $all_datas[26]; ?>"></td>
                        <td><input type="text" name='sun4' disabled value="<?php echo $all_datas[27]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Session 5</td>
                        <td><input type="text" name='mon5' disabled value="<?php echo $all_datas[28]; ?>"></td>
                        <td><input type="text" name='tues5' disabled value="<?php echo $all_datas[29]; ?>"></td>
                        <td><input type="text" name='wed5' disabled value="<?php echo $all_datas[30]; ?>"></td>
                        <td><input type="text" name='thurs5' disabled value="<?php echo $all_datas[31]; ?>"></td>
                        <td><input type="text" name='fri5' disabled value="<?php echo $all_datas[32]; ?>"></td>
                        <td><input type="text" name='sat5' disabled value="<?php echo $all_datas[33]; ?>"></td>
                        <td><input type="text" name='sun5' disabled value="<?php echo $all_datas[34]; ?>"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>