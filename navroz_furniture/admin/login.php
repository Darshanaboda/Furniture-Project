
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
  
  <form class="modal-content animate" action="./check-login.php" method="post">
    
    <div class="container">
    <h2> Login </h2>
    <?php 
    if(isset($_COOKIE["message"])) 
    {
        echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
        setcookie("message", "", time()-60);
    }
    ?>
      <label for="uname"> 
        <svg width="18px" height="18px" viewBox="0 0 43 46" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.0895 23.0891C27.3895 23.0891 32.3395 18.1391 32.3395 11.8391C32.3395 5.53905 27.3895 0.58905 21.0895 0.58905C14.7895 0.58905 9.83946 5.53905 9.83946 11.8391C9.83946 18.1391 14.7895 23.0891 21.0895 23.0891ZM42.0145 42.8891C39.0895 31.4141 27.3895 24.2141 15.9145 27.1391C8.26446 29.1641 2.18946 35.0141 0.164464 42.8891C-0.0605362 44.0141 0.614464 45.3641 1.96446 45.5891C2.18946 45.5891 2.41446 45.5891 2.41446 45.5891H39.7645C41.1145 45.5891 42.0145 44.6891 42.0145 43.3391C42.0145 43.1141 42.0145 42.8891 42.0145 42.8891Z" fill="white"/></svg>
        <b>Username</b>
      </label>
      <input type="text" placeholder="Enter Username" name="uname"  required> 
      <label for="psw">
        <svg width="18px" height="18px" viewBox="0 0 37 46" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.3391 16.3391V11.8391C29.3391 5.53905 24.3891 0.58905 18.0891 0.58905C11.7891 0.58905 6.83911 5.53905 6.83911 11.8391V16.3391C3.01411 16.3391 0.0891113 19.2641 0.0891113 23.0891L0.0891113 38.8391C0.0891113 42.6641 3.01411 45.5891 6.83911 45.5891H29.3391C33.1641 45.5891 36.0891 42.6641 36.0891 38.8391V23.0891C36.0891 19.2641 33.1641 16.3391 29.3391 16.3391ZM11.3391 11.8391C11.3391 8.01405 14.2641 5.08905 18.0891 5.08905C21.9141 5.08905 24.8391 8.01405 24.8391 11.8391V16.3391H11.3391V11.8391ZM20.3391 34.3391C20.3391 35.6891 19.4391 36.5891 18.0891 36.5891C16.7391 36.5891 15.8391 35.6891 15.8391 34.3391V27.5891C15.8391 26.2391 16.7391 25.3391 18.0891 25.3391C19.4391 25.3391 20.3391 26.2391 20.3391 27.5891V34.3391Z" fill="white"/></svg>
        <b>Password</b>
      </label>
      <input type="password" placeholder="Enter Password" name="psw" required> 
      <button type="submit">Login</button> 
    </div> 
  </form>
</div> 
    <?php include "footer.php"; ?>
</body>
<?php 
    if(isset($_COOKIE["registermessage"])) 
    {
        echo "<script>alert('".$_COOKIE["registermessage"]."')</script>";
        setcookie("registermessage", "", time()-60);
    }
?>
</html>
