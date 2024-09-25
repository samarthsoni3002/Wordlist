<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <form action="" method="POST">
        <label for="">Enter new password:- </label></br>
        <input type="text" name="reset">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php

    include "./connection.php";
    include "./forgetPass.php";

    if(isset($_POST['submit'])){

        $pass = $_POST['reset'];

        



    }





?>