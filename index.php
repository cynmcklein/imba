<?php

ob_start();
require_once('includes/load.php');


// // // require_once 'conndb.php';
// if (isset($_POST['login'])) {

//     $username = $_POST['username'];


//     $sql = "SELECT group_name FROM users WHERE username = '$username'";
//     $user = $data->query($sql) or die($data->error);
//     $row = $user->fetch_assoc();
//     $total = $user->num_rows;

//     if ($row["group_name"] == "Production") {

//         header("location:home.php");
//     } elseif ($row["group_name"] == "Admin") {
//         header("location:home.php");
//     } else {
//         die("invalid input");
//     }
// }


//if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $username = $_POST["username"];
//$password = $_POST["password"];


// $sql = "select * from users WHERE username = '" . $username . "' AND password = '" . $password . "' ";

///  $result = mysqli_query($data, $sql);

// $row = mysqli_fetch_array($result);

// if ($row["group_name"] == "Production") {

//     header("location:production.php");
// } elseif ($row["group_name"] == "Admin") {
//     header("location:index.php");
// } else {
//     die("invalid input");
// }
//}


?>


<html>

<head>
    <title>BigApple IMS</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style1.css">

    <style>
        .avatar {



            background-color: white;




        }
    </style>


</head>

<body>
    <?php include_once('headerdemo.php');

    ?>

    <div class="loginbox">
        <img src="assets/img/bapilogo.png" class="avatar">
        <h1>Welcome back!</h1>
        <div class="row">
            <div class="col-md-12">
                <?php echo display_msg($msg); ?>
            </div>
        </div>

        <form class="login_form" name="form" action="auth.php" method="POST" class="clearfixx">


            <div id="email_error">Please Fill up Email or Phone</div>
            <input type="Text" name="username" placeholder="Enter Username">


            <div id="pass_error">Please Fill up Password</div>
            <input type="Password" name="password" placeholder="Enter Password">

            <input type="Submit" name="login" value="Login">

            <a href="forgot_pass.php">Forgot Password</a>





        </form>
    </div>




    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
<?php include_once('footerdemo.php'); ?>