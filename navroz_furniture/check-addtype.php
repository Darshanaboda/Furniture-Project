<?php include "dbconect.php"; ?>
<?php 
$cname = $_POST['cname']; 

$sql = "INSERT INTO type (name)
VALUES ('$cname')";
 
if ($conn->query($sql) === TRUE) {
    $message = "Type added successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: type.php");
} 
else {

    $message = "Type not added";
    setcookie("message", $message, time()+5*60);
    header("Location: addtype.php");
}
?>