<?php
   session_start();
   header("Access-Control-Allow-Origin: http://localhost:3000"); // should be set to correct host address on deploy
   header("Access-Control-Allow-Headers: *"); // TODO : Fix -  https://stackoverflow.com/questions/8719276/cors-with-php-headers
   header('Access-Control-Allow-Credentials: true');
   // header('Content-Type: application/json');

   if (isset( $_SESSION['myname'])) {
     echo "is set!";
     return;
   }

   // create password table
   // hash and salt passwords
   // verify with email
   // logout feature
   // update password

    if(isset($_POST['mypass']) && isset($_POST['myname'])) {


       if ($_POST['mypass'] == "pass" && $_POST['myname'] == "buller") {

            $_SESSION['myname'] = $_POST['myname'];
            echo "session set!";
            return; 
   
       }
    }
    echo "Login failed!";

?>