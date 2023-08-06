<?php include "dbconect.php"; ?>
<?php 
 $id = $_GET['id'];
 $sql = "DELETE FROM subcategory WHERE `id`='" . $id . "'";
 
if ($conn->query($sql) === TRUE) {
    $message = "Subcategory deleted successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: subcategory.php");
} 
else { 
    $message = "Subcategory not deleted";
    setcookie("message", $message, time()+5*60);
    header("Location: subcategory.php");
}
?>