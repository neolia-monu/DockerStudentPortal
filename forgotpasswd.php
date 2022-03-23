<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="./CSS/forgot.css">
</head>
<body>


    <div class="form-div">
        <h3>Forgot Password</h3>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
            <div class="aise-hi">
<!--                <div class="input-div">-->
<!--                    <input type="text" name="username" size="22px" placeholder="Username">-->
<!--                </div>-->
                <div class="input-div">
                    <input type="password" name="password" size="22px" placeholder="Password">
                </div>
                <div class="input-div">
                    <input type="password" name="password" size="22px" placeholder="Confirm Password">
                </div>
                <div class="submit-div">
                    <input type="submit"  name="submit">
                </div>
                <div class="form-back">
                    <a href="admin.php">Back to Login</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

