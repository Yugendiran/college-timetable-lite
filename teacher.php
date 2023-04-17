<?php
include 'db/conn.php';
include 'components/header.php';
include 'components/sidebar.php';
include 'components/topbar.php';

if($loginUserRole != 'teacher'){
    header('location: logout.php');
}

switch($_GET['page']){
    case 'timetable':
        include 'includes/teacher/timetable.php';
        break;
    case 'class':
        include 'includes/teacher/class.php';
        break;
    case 'teacher':
        include 'includes/teacher/teacher.php';
        break;
    default:
        // header('location: logout.php');
}

include 'components/footer.php';
?>