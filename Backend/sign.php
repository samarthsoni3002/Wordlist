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
    <script src="./reset.js"></script>
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
            <div class="title">Sign Up</div>
            <form action="" method="POST">
              
            <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" name="name" placeholder="Enter your name" required />
            </div>
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
                
                <div class="button input-box">
                  <input type="submit" value="Sign Up" name="submit"/>
                </div>
                <div class="text sign-up-text">
                  Don't have an account? <a href="./index.php">Login now</a>
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

    if(isset($_POST['submit'])){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['passwd'];

      $insert = "insert into signup(Name,email,password) values('$name','$email','$password');";

      $inserted = mysqli_query($connect,$insert);


      if($inserted){
        ?>
       
        <script>alert("Data Inserted")</script>
        <?php
        header('location:./questions1.php');
      }
      else{
        ?>
        <script>alert("Error")</script>
        <?php
      }
      
      

    }
    





?>

