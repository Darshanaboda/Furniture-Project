<?php include "dbconect.php"; ?>
<?php 
 $id = $_GET['id'];
 $sql = "DELETE FROM type WHERE `id`='" . $id . "'";
 
if ($conn->query($sql) === TRUE) {
    $message = "Type deleted successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: type.php");
} 
else { 
    $message = "Type not deleted";
    setcookie("message", $message, time()+5*60);
    header("Location: type.php");
}
?>