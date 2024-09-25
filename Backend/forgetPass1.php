<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
   
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
                i++;
            }
            else{
                document.getElementById('next').innerHTML="What is the name of you city you were born in?";
                i = 0;
            }


        }

    </script>
</head>
<body>
 
        <nav>
        <img src="../word.png"/>
        </nav>

        <font color="#707">  <h1>Recover Password</h1></font>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="">Enter Your Email</label>
        <input type="text" name="email" placeholder="Enter Here!"></br>
        <label for="">Reset Password</label>
        <input type="text" name="reset" placeholder="Enter Here!"></br>
        <label for="" id="next">What is the name of you city you were born in?</label>
        <input type="text" name="questions" placeholder="Enter Here!"></br>
        <button name="submit">Send</button>
        <br>
   
    </form>
   
       <font color="#707"><h3 for="">Another Question?</h3> </font>
        <input type="submit" value="->" id="Change" onclick="nextQuestion()"></input>
    
    
</body>
</html>


<?php

    include 'connection.php';

    if(isset($_POST['submit'])){

        $questions = $_POST['questions'];
        $email = $_POST['email'];
        $reset = $_POST['reset'];


        $query = "select * from forgetpassword where email = '$email';";
        $queryresult = mysqli_query($connect,$query);

        $emailquery = mysqli_num_rows($queryresult);
        

        if($emailquery){
            $emailcheck = mysqli_fetch_assoc($queryresult);
            $originalquestion = $emailcheck['city'];
            $originalquestion2 = $emailcheck['school'];
            $originalquestion3 = $emailcheck['child'];

            

            if($questions == $originalquestion){
                ?>
                <script>alert("Working")</script>
                <?php
                $resetPass = "update signup set password = '$reset' where email = '$email'";
                mysqli_query($connect,$resetPass);
                header("location:./index.php");
            }
            else if($questions == $originalquestion2 ){
                 ?>
                <script>alert("Working")</script>
                <?php
                $resetPass = "update signup set password = '$reset' where email = '$email'";
                mysqli_query($connect,$resetPass);
                header("location:./index.php");
            }
            else if($questions == $originalquestion3){
                 ?>
                <script>alert("Working")</script>
                <?php
                $resetPass = "update signup set password = '$reset' where email = '$email'";
                mysqli_query($connect,$resetPass);
                header("location:./index.php");
            }
            else{
                ?>
                <script>alert("Answer doesnot match")</script>
                <?php
            }


        }
    }



?>