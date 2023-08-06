
<?php
session_start(); 
if (isset($_SESSION['user']))
{
    header('Location: index.php');
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include "links.php"; ?> 
</head>
<body>
    <?php include "nav.php"; ?>

    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="./ckeck-registration.php" method="post">
    
    <div class="container">
    <h2 class="title" style="display:block;margin-bottom:30px">Sign Up </h2>
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
      
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required> 
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required> 
      <button type="submit">Register</button> 
    </div> 
  </form>
</div> 
    <?php include "footer.php"; ?>
</body>
</html>