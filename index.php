<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Login and Registration Form  </title>-->
    <link rel="stylesheet" href="../style.css" />
    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>
    <header>
      <div class="main">
        <div class="logo">
          <img src="../word.png" alt="" />
        </div>
      </div>
    </header>

    <div class="container">
      <input type="checkbox" id="flip" />
      <div class="cover">
        <div class="front">
          <!--<img src="images/frontImg.jpg" alt="">-->
          <div class="text">
            <span class="text-1"
              >Every new friend is a <br />
              new adventure</span
            >
            <span class="text-2">Let's get connected</span>
          </div>
        </div>
        <div class="back">
          <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
          <div class="text">
            <span class="text-1"
              >Complete miles of journey <br />
              with one step</span
            >
            <span class="text-2">Let's get started</span>
          </div>
        </div>
      </div>
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Log in</div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="text" name="email" placeholder="Enter your email" required />
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    name="passwd"
                    placeholder="Enter your password"
                    required
                  />
                </div>
                <div class="text"><a href="./forgetPass1.php">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" value="Login" name="submit"/>
                </div>
                <div class="text sign-up-text">
                  Don't have an account? <a href="./sign.php">Sigup now</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   
  </body>
</html>

<?php

  include "./connection.php";


  if(isset($_POST["submit"])){

    $username = $_POST['email'];
    $password = $_POST['passwd'];



    $email_exists = "select * from signup where email = '$username'";
    $query = mysqli_query($connect,$email_exists);

    

    $emailCount = mysqli_num_rows($query);

    if($emailCount){
      $email_pass = mysqli_fetch_assoc($query);
      $originalPass = $email_pass['password'];

      $_SESSION['email'] = $email_pass['email'];

     

      if($password === $originalPass){
          ?>
          <script>alert("Login Successfull");</script>
          <?php
          header('location:../homePage.php');
      }
      else{
        ?>
        <script>alert("Incorrect Password")</script>
        <?php
      }

    }
    else{
      ?>
      <script>alert("Email Id doesnot exists")</script>
      <?php
    }
    



  }


?>