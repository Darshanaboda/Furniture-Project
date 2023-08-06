<?php include "dbconect.php"; ?>
<?php 
 $id = $_GET['id'];
 $sql = "DELETE FROM category WHERE `id`='" . $id . "'";
 
if ($conn->query($sql) === TRUE) {
    $message = "Category deleted successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: category.php");
} 
else { 
    $message = "Category not deleted";
    setcookie("message", $message, time()+5*60);
    header("Location: category.php");
}
?>