<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <?php include "links.php"; ?>
    <?php include "header.php"; ?>
</head>
<body>
    <?php include "nav.php"; ?>
    <div id="id01" class="modal">
    <form class="modal-content animate" action="./check-adduser.php" method="post"> 
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Add User </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }
        ?>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>  
        <label for="mon"><b>Mobile No.</b></label>
        <input type="number" placeholder="Enter Mobile No." name="mon" required >  
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required> 
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required> 
        <button type="submit">Add User</button> 
        </div> 
  </form>
</div>
    <?php include "footer.php"; ?>
</body>
</html>