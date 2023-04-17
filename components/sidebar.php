<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<!-- <li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
 -->

 <?php
 if($_SESSION['role'] == 'student'){
?>
<li class="nav-item active">
    <a class="nav-link" href="student.php?page=timetable">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Timetable</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="student.php?page=class">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Class</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="student.php?page=teacher">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Teacher</span></a>
</li>
<?php
 }
 ?>

<?php
 if($_SESSION['role'] == 'teacher'){
?>
<li class="nav-item active">
    <a class="nav-link" href="teacher.php?page=timetable">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Timetable</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="teacher.php?page=class">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Class</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="teacher.php?page=teacher">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Teacher</span></a>
</li>
<?php
 }
 ?>

 
<?php
 if($_SESSION['role'] == 'hod'){
?>
<li class="nav-item active">
    <a class="nav-link" href="hod.php?page=timetable">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Timetable</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="hod.php?page=class">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Class</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="hod.php?page=teacher">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Teacher</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="hod.php?page=subject">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Subject</span></a>
</li>
<?php
 }
 ?>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">