<?php include "dbconect.php"; ?>
<?php 
$un = $_POST['uname'];
$pw = $_POST['psw'];
$name = $_POST['name'];
$mon = $_POST['mon']; 

$sql = "INSERT INTO registration (username, password, name,number)
VALUES ('$un', '$pw', '$name','$mon')";
 
if ($conn->query($sql) === TRUE) {
    $message = "Register successfull";
    setcookie("registermessage", $message, time()+5*60);
    header("Location: login.php");
} 
else {

    $message = "Register unsuccessfully";
    setcookie("message", $message, time()+5*60);
    header("Location: registration.php");
}
?>