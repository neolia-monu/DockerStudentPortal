<?php

require_once 'database/conn.php';
session_start();

if((isset($_POST['signUp'])) && ($_SERVER['REQUEST_METHOD'] == 'POST')){

    $enrolment = $_POST['enrolment_no'];

    $username = strtolower(trim($_POST['username']));

    $gender = $_POST['gender'];

    $password = $_POST['password'];

    $phone_no = $_POST['phone_no'];

    $semester = $_POST['semester'];

    $email = $_POST['email'];

//    echo "Gender: $gender";

    if(strlen($username) <= 3 || $gender == ""){
        header("Location: registration.php");
    }else {

        if (strlen($password) < 5 || strlen($email) < 6) {
            header("Location: registration.php");
        } else {

            $result = $crud->insert($enrolment, $username, $password, $email, $phone_no, 
                $semester, $gender);

            if (!$result) {
//        echo "<div>Username or Password is incorrect!</div>";
                echo "username already taken";
            } else {
                // $_SESSION['username'] = $username;
                // $_SESSION["enrolment_no"])
                $_SESSION['enrolment_no'] = $enrolment;

                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $username;

                header("Location: success.php");
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="CSS/signUp.css">
</head>
<body>
<main>
    <div class="main-div">
    <div class="title">
    <h2>Student Registration</h2>
</div>
    <div class="form-div">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
            
            <div class="input-div">
                <input type="text" name="enrolment_no" size="22px" placeholder="Enrolment Number">
            </div>
            <div class="input-div">
                <input type="text" name="username" size="22px" placeholder="Username">
            </div>
            <div class="input-div">
                <input type="email" name="email" size="22px" placeholder="Email">
            </div>
            <div class="input-div">
                <input type="text" name="phone_no" size="22px" placeholder="Phone Number">
            </div>
            <div class="input-div">
                <input type="password" name="password" size="22px" placeholder="Password">
            </div>
            <div class="input-div">
                <input type="password" name="cnfPassword" size="22px" placeholder="Confirm Password">
            </div>

            <div class="select-div">
                Semester
                <select name="semester" id="sem">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="input-div">
                <input type="radio" name="gender" checked value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Other">Other
            </div>
            <div class="submit-div">
                <input type="submit"  name="signUp" value="Register">
            </div>
           <!--  <div class="form-forgot">
                <a href="">Forgot Password</a>
            </div> -->
            <div class="create-ac">
                <a href="login.php">Already have an account</a>
            </div>
    
    </form>
</div>
</div>
</main>
</body>
</html>
