<?php

    $username = "root";
    $password = "";
    $server =  "localhost";
    $database = "Registration";


    $connect = mysqli_connect($server,$username,$password,$database);

    if(!$connect){
        ?>
        <script>alert("Connection Failed");</script>
        <?php

    }
   
?>