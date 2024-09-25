<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylE.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Recover Password</title>
    <script>
        let i = 0;
        function nextQuestion(){
            
            if(i === 0){
                document.getElementById('next').innerHTML="Name of your first School?";
                i++;
            }
            else if(i===1){
                document.getElementById('next').innerHTML="Your Childhood Nickname?";
                document.getElementById("Change").innerHTML = "Submit";
                i++;
            }
            
        }
        

    </script>
</head>
<body>
    
    <nav>
        <img src="../word.png"/>
        </nav>

   
    <font color="#707">   <h1>Recover Password</h1></font>
    <form action="" method="POST">
        <label for="" >Please Confirm Your Email</label>
        <input type="text" name="email" placeholder="Enter Here!"><br>
        <label for="" id="next">What is the name of you city you were born in?</label>
        <input type="text" name="city" placeholder="Enter Here!"><br>
        <label for="" id="next">Name of your first School?</label>
        <input type="text" name="school" placeholder="Enter Here!"><br>
        <label for="" id="next">Your Childhood Nickname?</label>
        <input type="text" name="child" placeholder="Enter Here!"><br>
        <button type="submit" id="Change" name="submit">Submit</button>
    </form>
    
</body>
</html>

<?php

    include "./connection.php";
    

    if(isset($_POST['submit'])){

        $name = $_POST['email'];
        $city = $_POST['city'];
        $school = $_POST['school'];
        $child = $_POST['child'];

        

        $query = "insert into forgetpassword(email,city,school,child) values('$name','$city','$school','$child');";

        $insert = mysqli_query($connect,$query);

        if($insert){
            ?>
            <script>alert("Done")</script>
            <?php
            header("location:./index.php");
        }
        else{
            echo mysqli_errno($connect);
        }


    }



?>

