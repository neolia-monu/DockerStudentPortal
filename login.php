<?php

// include_once 'success_reset.php';
require_once 'database/conn.php';

session_start();
$error = "";

if((isset($_POST['submit'])) && ($_SERVER['REQUEST_METHOD'] == 'POST')){

    $enrolment = $_POST['enrolment_no'];
    $password = $_POST['password'];

    $result = $crud->getUser($enrolment, $password);


    if(!$result){
      $error = "Username or Password is incorrect!";
        // echo "<div></div>";
    }else {
        $_SESSION['username'] = $enrolment;
        // $_SESSION['userid'] = $result['uid'];
        // $_SESSION['email'] = "value";
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@4000&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <div class="main-div">
    <div class="title">
        <h2>Student Login</h2>
    </div>
    <div class="form-div">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
        <!-- <div class="aise-hi"> -->

          <?php
            echo "<span style='color:red;'>$error</span>";
          ?>
            <div class="input-div">
                <input type="text" name="enrolment_no" size="22px" placeholder="Enrollment Number">
            </div>
            <div class="input-div">
                <input type="password" name="password" size="22px" placeholder="Password">
            </div>
            <div class="submit-div">
                <input type="submit"  name="submit" value="Log In">
            </div>
            <!-- <div class="form-forgot">
                <a href="">Forgot Password</a>
            </div> -->
            <div class="create-ac">
                <a href="registration.php">Create an account</a>
            </div>
        <!-- </div> -->
    </form>
</div>
</div>
</main>
</body>
</html>
