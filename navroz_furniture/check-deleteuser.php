<?php include "dbconect.php"; ?>
<?php 
 $id = $_GET['id'];
 $sql = "DELETE FROM user WHERE `id`='" . $id . "'";
 
if ($conn->query($sql) === TRUE) {
    $message = "User deleted successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: user.php");
} 
else { 
    $message = "User not deleted";
    setcookie("message", $message, time()+5*60);
    header("Location: edituser.php");
}
?>