<?php include "dbconect.php"; ?>
<?php 
$un = $_POST['uname'];
$pw = $_POST['psw'];
$query = mysqli_query($conn, "SELECT * FROM registration WHERE username='$un' AND password='$pw'"); 
if (mysqli_num_rows($query) > 0) {
    session_start(); 
    $_SESSION['user']=$un;
    $message = "ok";
    header("Location: user.php");
} 
else {

    $message = "Username or Password not found.";
    setcookie("message", $message, time()+5*60);
    header("Location: login.php");
}
?>