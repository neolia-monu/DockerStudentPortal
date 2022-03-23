<?php

include 'auth.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
</head>
<body>

<nav id="header-nav">
    <ul id='header-ul'>
        <li><a href=""><?php echo $_SESSION['username'] ?></a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>

<section id='header-link'>

<nav class="nav-side">
        <a href="index.php">Home</a>
        <a href="table.php">Time Table</a>
        <a href="mid_table.php">Mid Time Table</a>
        <a href="mid_marks.php">Mid Marks</a>
        <a href="syllabus.php">Syllabus</a>
        <a href="notification.php">Notification</a>
        <a href="https://www.students.gtu.ac.in/" target="_blank">Student Grade</a>
</nav>
