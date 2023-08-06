<?php include "dbconect.php"; ?>
<?php 
$email = $_POST['email'];
$pw = $_POST['psw'];
$name = $_POST['name'];
$mon = $_POST['mon']; 

$sql = "INSERT INTO user (email, password, name,number)
VALUES ('$email', '$pw', '$name','$mon')";
 
if ($conn->query($sql) === TRUE) {
    $message = "User added successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: user.php");
} 
else {

    $message = "User not added";
    setcookie("message", $message, time()+5*60);
    header("Location: adduser.php");
}
?>