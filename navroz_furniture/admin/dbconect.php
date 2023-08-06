<?php
   
$servername = "localhost"; 
$username = "root"; 
$password = "";
   
$conn = new mysqli($servername, 
            $username, $password,'furniture');
   
if ($conn->connect_error) {
    echo"Connection failure: ". $conn->connect_error;
}

   
?>