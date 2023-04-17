<?php
include 'db/conn.php';
include 'components/header.php';
include 'components/sidebar.php';
include 'components/topbar.php';

if($loginUserRole != 'student'){
    header('location: logout.php');
}

switch($_GET['page']){
    case 'timetable':
        include 'includes/student/timetable.php';
        break;
    case 'class':
        include 'includes/student/class.php';
        break;
    case 'teacher':
        include 'includes/student/teacher.php';
        break;
    default:
        header('location: logout.php');
}

include 'components/footer.php';
?>