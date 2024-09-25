
<?php

  session_start();

  if(!isset($_SESSION['email'])){
    header('location:./registration/login.php');
  }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
     <link rel="stylesheet" href="style2.css">
   
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="./js.js"></script>
    <title>WordLists</title>
  </head>
  <body>
    <section class="header">
        <nav>
        <a href="homePage.php"><img src="word.png"></a>
         
             <div class="nav-links" id="navlinks">
                <ul>   
                    <li><a href="homePage.php">HOME</a></li>
                    <li><a href="Plans.html">Our Future Plans</a></li>
                    <li><a href="./registration/logout.php">Log out </a></li>
                </ul>
                
             </div>
            </nav>
             <div class="text-box">
                <h1>Wordlist Generator</h1>
          </div>
         
            <div class="main">
              <h1>How do you want to make your wordlists?</h1>   

<div class="wordlist">
 <label for=""><h3>Enter letters to make a wordlist.</h3> </label>
  <input type="radio" name="same" id="radio1">
  <input type="text" id="first">
  
  <label for=""><h3>Enter words seperated by comma to add to a wordlist.</h3> </label>
  <input type="radio" name="same" id="radio2">
  <input type="text" id="second">
  <label><h3>Download Popular WordLists</h3></label>
  <a href="https://github.com/danielmiessler/SecLists">Click Here!</a>
</div>

  <div class="btn">
              <button type="submit" id="change" onclick="mainWorking()">
                       <font color="#707">Download WordLists</font>  
                      </button>
                        </div>
                  
    <p id="write"><h1><font color="#800080"></h1></p>
  </div>
      </section>
  
</body>
</html>

    