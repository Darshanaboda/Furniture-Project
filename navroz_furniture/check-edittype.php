<?php include "dbconect.php"; ?>
<?php 
$id = $_POST['id'];
$cname = $_POST['cname']; 

$sql = "UPDATE type
SET name = '$cname'
WHERE id='$id';";
 
if ($conn->query($sql) === TRUE) {
    $message = "Type updated successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: type.php");
} 
else { 
    $message = "Type not updated";
    setcookie("message", $message, time()+5*60);
    header("Location: type.php");
}
?>