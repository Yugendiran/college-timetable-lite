<?php
ob_start();
session_start();

if(isset($_SESSION['isLoggedIn'])){
    header('location: index.php');
}

// include 'db/conn.php';
$connection = mysqli_connect('localhost','root','','clg-timetable');

if(!$connection){
    echo "Database not connected";
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <?php
if($_POST){
    $login_email = $_POST['email'];
    $login_password = $_POST['password'];

    $select_user_query = "SELECT * FROM users WHERE userEmail = '$login_email' LIMIT 1";
    $select_user_result = mysqli_query($connection, $select_user_query);
    $select_user_rows = mysqli_num_rows($select_user_result);
    $select_user_row = mysqli_fetch_assoc($select_user_result);
    
    
    if($select_user_rows > 0){
        $db_userId = $select_user_row['userId'];
        $db_userName = $select_user_row['userName'];
        $db_userEmail = $select_user_row['userEmail'];
        $db_userPass = $select_user_row['userPass'];
        if($login_email == $db_userEmail && $login_password == $db_userPass){
            $select_user_role_query = "SELECT * FROM user_section WHERE userId = $db_userId LIMIT 1";
            $select_user_role_result = mysqli_query($connection, $select_user_role_query);
            $select_user_role_row = mysqli_fetch_assoc($select_user_role_result);
            $select_user_role_rows = mysqli_num_rows($select_user_role_result);

            if($select_user_role_rows > 0){
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['loginUserId'] = $db_userId;
                $_SESSION['role'] = $select_user_role_row['role'];
                
                if($select_user_role_row['role'] == 'student') {
                    header("location: student.php?page=timetable");
                }elseif($select_user_role_row['role'] == 'teacher'){
                    header("location: teacher.php?page=timetable");
                }elseif($select_user_role_row['role'] == 'hod'){
                    header("location: hod.php?page=timetable");
                }elseif($select_user_role_row['role'] == 'admin'){
                    header("location: admin.php");
                }
            }else{
                echo "This user is not assigned to any section";
            }
        }else{
            echo "Incorrect password";
        }
    }else{
        echo "No user found";
    }
}
                                    ?>

                                    <form class="user" action="login.php" method='post'>
                                        <div class="form-group">
                                            <input type="email" name='email' class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name='password' class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <button type='submit' class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>