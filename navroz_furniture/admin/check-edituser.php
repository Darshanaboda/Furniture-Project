<?php include "dbconect.php"; ?>
<?php 
$id = $_POST['id'];
$email = $_POST['email'];
$pw = $_POST['psw'];
$name = $_POST['name'];
$mon = $_POST['mon']; 

$sql = "UPDATE user
SET email = '$email',password = '$pw',name = '$name',number = '$mon'
WHERE id='$id';";
 
if ($conn->query($sql) === TRUE) {
    $message = "User updated successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: user.php");
} 
else { 
    $message = "User not updated";
    setcookie("message", $message, time()+5*60);
    header("Location: edituser.php");
}
?>