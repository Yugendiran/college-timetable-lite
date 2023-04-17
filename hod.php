<?php
include 'db/conn.php';
include 'components/header.php';
include 'components/sidebar.php';
include 'components/topbar.php';

if($loginUserRole != 'hod'){
    header('location: logout.php');
}

switch($_GET['page']){
    case 'timetable':
        include 'includes/hod/timetable.php';
        break;
    case 'class':
        include 'includes/hod/class.php';
        break;
    case 'teacher':
        include 'includes/hod/teacher.php';
        break;
    case 'subject':
        include 'includes/hod/subject.php';
        break;
    default:
        header('location: logout.php');
}

include 'components/footer.php';
?>