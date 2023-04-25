<?php


require "vendor/autoload.php";
session_start();
if(isset($_POST['register'])) {
    $_SESSION['complete_name'] = $_POST['complete_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    header("Location: quiz.php");
    exit();
}
session_destroy();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>
<body>


    <h1>Analogy Exam Registration</h1>
    <h3>Kindly register your basic information before starting the exam.</h3>


    <form method="post" action="register.php">
    <label>Enter your Name:</label>
    <input type="text" name="complete_name" required>
    <br>
    <label>Email:</label>
    <input type="email" name="email" required>
    <br>
    <label>Birthdate:</label>
    <input type="date" name="birthdate" required>
    <br>
    <button type="submit" name="register">Register</button>
   
    </form>


</body>
</html>


<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>
