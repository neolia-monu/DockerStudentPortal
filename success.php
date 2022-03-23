<?php

  include 'success_auth.php';
  $username = $_SESSION['user_name'];
  $email = $_SESSION['user_email'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confirm Page</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      body{
        font-size: 24px;
      }
      main{
        display: flex;
        flex-direction: column;
        height: 100vh;
        justify-content: center;
        align-items: center;
        /*border: 2px dotted black;*/
      }
      a{
        text-decoration: none;
      }
      h2{
        margin: 6px;
      }
    </style>
  </head>
  <body>

<main>
  <?php
    echo "<h2>Hello 👋 " . $username . ".</h2>";
    echo "Email is sent to " . $email . " for account verification<br/><br/>";
    echo "<p>To logged into your account <a href='login.php'>click here</a></p>";
  ?>
</main>

</body>
</html>
